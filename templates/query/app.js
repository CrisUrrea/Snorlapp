//const contenedorQR = document.getElementById('contenedorQR');
const formulario = document.getElementById('formulario');

//new QRCode(contenedorQR, 'https://forms.gle/yKd3YN8vJDvbAyrA7');
const QR= new QRCode(contenedorQR);

formulario.addEventListener('submit', (e)=> {
    e.preventDefault();
    QR.makeCode('https://forms.gle/yKd3YN8vJDvbAyrA7')
});