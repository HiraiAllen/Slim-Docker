import React from 'react';
import ReactDOM from 'react-dom/client'; // Asegúrate de importar desde react-dom/client
import App from './App.jsx';

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('root'); // Asegúrate de que el ID sea correcto
    const root = ReactDOM.createRoot(container);
    root.render(<App />);
});