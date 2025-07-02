from flask import Flask, request, jsonify
from keras.models import load_model
from keras.preprocessing.image import load_img, img_to_array
from flask_cors import CORS
import numpy as np
import os
import uuid

app = Flask(__name__)
CORS(app)

model = load_model('DaffaNet-pest-64.13.h5')
labels = ['CK-12', 'CK-13', 'Pilar', 'Megatop', '36', '38', 'Random']

def prepare_image(img_path, target_size=(180, 180)):
    image = load_img(img_path, target_size=target_size)
    image = img_to_array(image)
    image = image / 255.0
    image = np.expand_dims(image, axis=0)
    return image

@app.route('/')
def home():
    return "API is running!"

@app.route('/predict', methods=['POST'])
def predict():
    if 'image' not in request.files:
        return jsonify({'error': 'No image uploaded'}), 400

    img = request.files['image']

    if not img.filename.lower().endswith(('.jpg', '.jpeg', '.png', '.heic')):
        return jsonify({'error': 'Invalid file type. Use jpg, jpeg, png, or heic.'}), 400

    os.makedirs("uploads", exist_ok=True)
    filename = f"{uuid.uuid4().hex}.jpg"
    img_path = os.path.join("uploads", filename)
    img.save(img_path)

    try:
        processed_img = prepare_image(img_path)
        preds = model.predict(processed_img)
        class_index = np.argmax(preds)
        confidence = float(np.max(preds)) * 100.0

        os.remove(img_path)

        return jsonify({
            'label': labels[class_index],
            'confidence': f"{confidence:.2f}%"
        })
    except Exception as e:
        if os.path.exists(img_path):
            os.remove(img_path)
        return jsonify({'error': str(e)}), 500

if __name__ == '__main__':
    app.run(port=5001, debug=True)
