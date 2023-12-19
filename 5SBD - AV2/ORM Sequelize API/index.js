const Aluno = require('./aluno');

(async () => {
    const bd = require('./bd');
    const Aluno = require('./aluno');
 
    try {
        const resultado = await bd.sync();
        console.log(resultado);
    } catch (error) {
        console.log(error);
    }

    /* const novoAluno = Aluno.create({
        matricula: '12345',
        nome: 'João',
        ingresso: '2022',
    }) 
    console.log(novoAluno); */
    

    /* const alunos = await Aluno.findAll();
    console.log(alunos) */

    /* const aluno = await Aluno.findByPk(1);
    console.log(alunos) */

    /* const aluno = await Aluno.findAll({
        where: {
            nome: 'João'
        }
    });
    console.log(aluno); */

    /* aluno.ingresso = '2023';
    await aluno.save(); */

    /* await Aluno.destroy({where: {
        nome: 'João',
    }}) */

})();