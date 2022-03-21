<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>


    <link rel="stylesheet" href="./stylesheets/base.css">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <link rel="stylesheet" href="./stylesheets/form.css">


    <title>Dados do Aluno</title>
</head>

<body>
    <?php
    include 'components/navbar.php';
    ?>

    <div class="container">


        <fieldset>
            <legend>
                <h2>Saúde/Alimentação</h2>
            </legend>
            <form class="formAluno">



                <div class="row-2">
                    <div class="column">

                        <label for="accountableAddress">
                            Tem dificuldades?
                        </label>
                    </div>

                    <div class="column">
                        <input type="text" name="" id="">


                    </div>




                </div>
                <div class="row-3">
                    <div class="column">
                        <label for="studentType">Tipo Sanguínio:</label>
                        <input type="text" name="studentType">
                    </div>
                    <div class="column">
                        <label for="studentType">Doença(s) frequentes:</label>
                        <input type="text" name="studentType">
                    </div>
                    <div class="column">
                        <label for="studentType">Doença permanente:</label>
                        <input type="text" name="studentType">
                    </div>

                </div>
                <div class="row-3">
                    <div class="column">
                        <label for="studentType">Doenças graves na família:</label>
                        <input type="text" name="studentType">
                    </div>
                    <div class="column">
                        <label for="studentType">Costuma ter dores de cabeça?</label>
                        <input type="text" name="studentType">
                    </div>
                    <div class="column">
                        <label for="studentType">Alergia(s):</label>
                        <input type="text" name="studentType">
                    </div>

                </div>
                <div class="row-3">
                    <div class="column">
                        <label for="studentType">Faz uso de algum tipo de medicamento?</label>
                        <input type="text" name="studentType">
                    </div>
                    <div class="column">
                        <label for="studentType">Cuidados especiais de saúde:</label>
                        <input type="text" name="studentType">
                    </div>
                    <div class="column">
                        <label for="studentType">A que horas costuma dormir:</label>
                        <input type="text" name="studentType">
                    </div>
                </div>
                <div class="row-2">
                    <div class="column">
                        <label for="studentType">N. de horas que costuma dormir?</label>
                        <input type="text" name="studentType">
                    </div>
                    <div class="column">
                        <label for="studentType">Alimenta-se ao sair de casa?</label>
                        <input type="text" name="studentType">
                    </div>

                </div>
            </form>


        </fieldset>
    </div>
    <?php
    include 'components/footer.php';
    ?>
</body>

</html>