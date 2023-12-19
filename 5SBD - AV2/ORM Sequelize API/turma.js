const Sequelize = require('sequelize');
const bd = require('./bd');

const Aluno = bd.define("aluno", {
    id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        allowNull: false,
        primaryKey: true,
    },
    nome: {
        type: Sequelize.STRING,
        allowNull: false
    },
    ingresso: {
        type: Sequelize.INTEGER,
        allowNull: false
    }
});

module.exports = Aluno;