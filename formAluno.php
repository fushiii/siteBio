<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="./stylesheets/base.css">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <link rel="stylesheet" href="./stylesheets/form.css">


    <title>Dados do Aluno</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>

    <div class="container">


        <fieldset>
            <legend>
                <h2>Dados do Aluno</h2>
            </legend>
            <form class="formAluno">

                <h2>Estudante:</h2>

                <div class="row">
                    <div class="column">
                        <label for="studentName">
                            Nome do Estudante:

                        </label>
                        <input type="text" name="studentName">
                    </div>

                    <div class="row-3">
                        <div class="column">
                            <label for="studentNumber"> Número:</label>
                            <input type="number" name="studentNumber">
                        </div>
                        <div class="column">
                            <label for="studentYear"> Seŕie: </label>
                            <input type="number" name="studentYear">
                        </div>
                        <div class="column">
                            <label for="studentBirthDate">Ano Letivo:</label>
                            <input type="text" name="studentAcademicYear">
                        </div>

                    </div>

                </div>
                <div class="row-2">
                    <div class="column">
                        <label for="studentBirthDate"> Data de Nascimento:</label>
                        <input type="date" name="studentBirthDate">
                    </div>

                    <div class="column">
                        <label for="studentBirtCity">
                            Naturalidade:

                        </label>
                        <input type="text" name="studentBirthCity">
                    </div>
                </div>
                <div class="row-2">


                    <div class="column">
                        <label for="studentCep">
                            CEP:

                        </label>
                        <input type="text" name="studentCep">
                    </div>
                    <div class="column">
                        <label for="studentTelephone">
                            Tel:

                        </label>
                        <input type="number" name="Telephone">
                    </div>

                </div>
                <div class="row-3">

                    <div class="column">
                        <label for="studentAddress">
                            Endereço:
                        </label>
                        <input type="text" name="studentAddress">
                    </div>
                    <div class="column">
                        <label for="studentState">
                            Estado:
                        </label>
                        <input type="text" name="studentState">

                    </div>
                    <div class="column ">

                        <label for="studentCounty">
                            Munícipio:
                        </label>
                        <input type="text" name="studentCounty">
                    </div>



                </div>

                <h2>Responsável:</h2>
                <br>



                <div class="row">
                    <div class="column">
                        <label for="accountableName">
                            Nome do Responsável:

                        </label>
                        <input type="text" name="accountableName">
                    </div>

                </div>


                <div class="row">
                    <div class="column">

                        <label for="accountableJob">
                            Profissão:
                        </label>
                        <input type="text" name="accountableJob">
                    </div>

                    <div class="column">
                        <label for="accountantEmployed">
                            Estade de contrato:
                        </label>
                        <br>
                        <div class="radio-button">
                            <input type="radio" id="kraken" name="monster">
                            <label for="kraken">Efetivo</label><br />
                            <input type="radio" id="sasquatch" name="monster">
                            <label for="sasquatch">Contratado</label><br />
                            <input type="radio" id="mothman" name="monster">
                            <label for="mothman">Aposentado</label>
                            <input type="radio" id="sasquatch" name="monster">
                            <label for="sasquatch">Desempegrado</label><br />
                            <input type="radio" id="mothman" name="monster">
                            <label for="mothman">Doméstico</label>
                            <input type="radio" id="mothman" name="monster">
                            <label for="mothman">Outro:</label>
                            <input type="text">
                        </div>

                    </div>
                </div>

                <div class="row-3">
                    <div class="column">
                        <label for="accountableAddress">
                            Endereço:
                        </label>
                        <input type="text" name="accountableAddress">
                    </div>
                    <div class="column">
                        <label for="accountableCounty">
                            Município:
                        </label>
                        <input type="text" name="accountableAddress">

                    </div>
                    <div class="column">
                        <label for="accountableAddress">
                            CEP:
                        </label>
                        <input type="text" name="accountableAddress">
                    </div>
                </div>

                <div class="row-2">
                    <div class="column">
                        <label for="accountableTelephoneHome">
                            Tel(Residencia):
                        </label>
                        <input type="text" name="accountableTelephoneHome">

                    </div>
                    <div class="column">
                        <label for="accountableTelephoneWork">
                            Tel(Trabalho):
                        </label>
                        <input type="text" name="accountableTelephoneWork">
                    </div>

                </div>
    </div>
    </form>


    </fieldset>
    </div>

</body>

</html>