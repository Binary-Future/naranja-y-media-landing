require('dotenv').config()
const express = require('express')
const nodemailer = require('nodemailer');
const bodyParser = require('body-parser')
var cors = require('cors')

const app = express()

app.use(cors())

const jsonParser = bodyParser.json()

const port = process.env.PORT || 9000

app.use(bodyParser.urlencoded({ extended: false }))

const transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: process.env.EMAIL_USER,
        pass: process.env.EMAIL_PASS
    }
});

app.post('/form', jsonParser, function (req, res) {
    const {
        nombre,
        email,
        movil,
        mensaje
    } = req.body

    const mailOptions = {
        from: email,
        to: process.env.EMAIL_COMPANY,
        subject: 'Nuevo mensaje desde landing Naranja & Media',
        text: `
      Nombre: ${nombre}
      Email: ${email}
      Movil: ${movil}
      Mensaje: ${mensaje}
    `
    };

    transporter.sendMail(mailOptions, function(error, info) {
        if (error) {
            console.log(error);
            res.json({
                success: false,
                error: error.message
            })
        } else {
            console.log('Email sent: ' + info.response);
            res.json({
                success: true
            })
        }
    });
})

app.listen(port, () => console.log('App runing in port ' + port))