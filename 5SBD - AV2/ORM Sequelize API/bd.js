const Sequelize = require('sequelize');

const sequelize = new Sequelize('coruja-sequelize', 'root', 'password', {
    host: 'localhost',
    port: 3306,
    dialect: 'mysql'
});

sequelize.authenticate().then(() => {
    console.log("Conseguiu conectar");
}).catch((err) => {
    console.log("Erro conectando com o BD");
});

module.exports = sequelize;