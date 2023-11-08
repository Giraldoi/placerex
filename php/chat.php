<?php include("template/encabezado.php")?>

<?php
$host = "localhost"; 
$usuario = "root"; // Cambia esto con tu nombre de usuario de la base de datos
$contrasena = ""; // Cambia esto con tu contraseña de la base de datos
$base_datos = "chatbot"; // Cambia esto con el nombre de tu base de datos

// Conectar a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$preguntas = array(
    "¿Cuáles son los beneficios de la masturbación?","¿Qué es la disfunción eréctil y cuáles son sus posibles causas?",
    "¿Qué es la eyaculación precoz y cómo se puede tratar?",
    "¿Cuál es la diferencia entre atracción sexual y romántica?",
    "¿Qué cambios ocurren durante la pubertad?",
    "¿Existen suplementos para mantener la libido en forma?",
    "¿Cuáles son los derechos de las personas LGBTQ+?",
    "¿Cuál es la relación entre la pornografía y la sexualidad?",
    "¿Qué es la menopausia y cómo afecta la sexualidad?",
    "¿Es normal que en la primera vez sangre y sienta mucho dolor?",
    "¿Cómo me debo tomar la pastilla del día después?",
    "¿Cuáles son los métodos anticonceptivos más efectivos?",
    "¿Las emociones pueden influir en la sexualidad?",
    "¿Es recomendable el uso de jabones, duchas y lociones vaginales?",
    "¿Qué es la circuncisión?",
    "¿Cuáles son las funciones de una sexóloga?",
    "¿El consumo de alcohol afecta mi vida sexual?",
    "¿Es necesario hacerme citologías y cada cuánto debería hacerlas?",
    "¿Cuáles son las ITS?",
    "¿Qué son los pedos vaginales?"
);

$respuestas = array(
    "Las masturbación tiene varios beneficios como lo son: - reducción del riesgo de cáncer de próstata - fortalecimiento del músculo del suelo pélvico - Alivio de dolores - Reducción de estrés y mejora del sueño - Aumento de la libido",
    "La disfunción eréctil es la incapacidad para lograr o mantener una erección lo suficientemente firme como para tener relaciones sexuales satisfactorias, está puede ser causada por: - Problemas físicos - Problemas psicológicos - Efectos secundarios por medicamentos - Lesiones o cirugías",
    "La eyaculación precoz es una disfunción sexual en la que el hombre eyacula antes de lo deseado durante las relaciones sexuales, lo que quiere decir que la eyaculación se da en el lapso de 1 a 3 minutos después de la penetración, el tratamiento para este problema puede incluir: - terapia sexual - asesoramiento psicológico - medicamentos recetados Es importante que recuerdes que cada caso es diferente, por lo que es importante buscar ayuda profesional",
    "La atracción sexual se basa en la atracción física, el deseo sexual y la excitación, en medida de la otra persona, mientras que la atracción romántica se basa en conexión emocional, el afecto y deseo de intimidad emocional con otra persona",
    "Durante la pubertad ocurren una serie de cambios que dependerán de la persona, sin embargo los más generales son: - Cambios emocionales - Cambios hormonales - Cambios en la menstruación y eyaculación - cambios físicos",
    "Los suplementos para mantener la libido más conocidos son: - testosterona: la testosterona es una hormona que puede impulsar la libido - Prasterona (Intrarosa): está es un gel vaginal que suministra la hormona dehidroepiandrosterona",
    "Los derechos de las personas LGBTQ+ son un tema importante en la lucha de la igualdad y la no discriminación, algunos de los derechos son: - Derecho a la igualdad y no discriminación - Derecho a la orientación sexual - Derecho a la identidad de género",
    "La pornografía es una representación explícita de la sexualidad destinada a la excitación sexual, algunos argumentan que la pornografía puede tener efectos negativos en la sexualidad y las relaciones, ya que puede promover expectativas poco realistas sobre el sexo, reforzar estereotipos de género. Por lo tanto, la relación de la sexualidad y la pornografía es muy estrecha, sin embargo, cómo vivas uno puede afectar al otro",
    "La menopausia es un proceso natural en la vida de las mujeres que marca el final de la etapa reproductiva. Durante la menopausia, los ovarios disminuyen la producción de hormonas como el estrógeno y la progesterona, esto tiene efectos en la sexualidad de las mujeres, los cuales son: - Cambios en la lubricación vaginal - Disminución del deseo sexual",
    "Es completamente normal que la primera vez las personas experimenten dolor y sangrado. El sangrado se puede dar por la ruptura del himen, y el dolor puede ser causado por la tensión muscular, la falta de lubricación o la ansiedad asociada con la primera experiencia sexual",
    "Lo primero que debes tener en cuenta es el tiempo. Está es recomendable tomarla dentro de las 72 horas. Por lo general, se toma una sola pastilla, pero esto varía según la que compres. Esta pastilla solo se puede tomar 3 veces en el año",
    "Los métodos anticonceptivos más efectivos son: - El implante: este tiene una eficacia superior al 99% - Dispositivo intrauterino: tiene una eficacia del 99% - Esterilización: tiene una eficacia del 99% - Anticonceptivos inyectables: tiene una eficacia del 94%",
    "La sexualidad es un equilibrio entre aspectos emocionales y físicos. Las emociones pueden condicionar nuestras relaciones fisiológicas, pensamientos y conductas. Por ejemplo, el estrés, la ansiedad, la depresión o los problemas de autoestima pueden afectar el deseo sexual",
    "No es recomendable el uso de jabones, duchas y lociones vaginales, ya que estos productos alteran el equilibrio natural del pH vaginal y pueden causar irritación o infecciones",
    "La circuncisión es la extirpación quirúrgica del prepucio, la piel que cubre la punta del pene",
    "Algunas de las principales funciones de una sexóloga incluyen: - Promover la salud sexual - Prevención y tratamiento de problemas sexuales - Asesoramiento y orientación en sexualidad",
    "El consumo de alcohol puede afectar la vida sexual de diferentes maneras. En los hombres, puede afectar la capacidad de tener una erección, y en las mujeres, puede alterar el equilibrio hormonal y afectar la lubricación vaginal",
    "Se aconseja que a partir de los 25 y 30 años de edad se las realicen cada 3 años. De los 30 a los 65, cada 5 años. Pero es necesario que la comiences a hacer desde que inicias una vida sexual, ya que esto puede ayudar a prevenir muchas enfermedades o descubrirlas a tiempo",
    "Algunas de las ITS son: - Virus del papiloma humano - VIH - Hepatitis - Herpes genital - Sífilis",
    "Los pedos vaginales son un fenómeno común que ocurre cuando el aire queda atrapado en la vagina y se libera"
);

for ($i = 0; $i < count($preguntas); $i++) {
    $pregunta = $preguntas[$i];
    $respuesta = $respuestas[$i];
    $sql = "INSERT INTO respuestas (preguntas, replies) VALUES (?, ?)";
    $stmt = $conexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $pregunta, $respuesta);
        if ($stmt->execute() === false) {
            echo "Error al insertar datos: " . $stmt->error;
        }
    } else {
        echo "Error en la preparación de la consulta: " . $conexion->error;
    }
}


// Cerrar la conexión
$conexion->close();
?>
<?php
// conectando a la base de datos
$conn = mysqli_connect("localhost", "root", "", "chatbot") or die("Database Error");

// obteniendo el mensaje del usuario a través de ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//comprobando la consulta del usuario a la consulta de la base de datos
$check_data = "SELECT replies FROM respuestas WHERE preguntas LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// si la consulta del usuario coincide con la consulta de la base de datos, mostraremos la respuesta; de lo contrario, irá a otra declaración
if (mysqli_num_rows($run_query) > 0) {
    //recuperando la reproducción de la base de datos de acuerdo con la consulta del usuario
    $fetch_data = mysqli_fetch_assoc($run_query);
    //almacenando la respuesta a una variable que enviaremos a ajax
    $replay = $fetch_data['replies'];
    echo $replay;
} else {
    echo "¡Lo siento, no puedo ayudarte con este inconveniente! Favor comunícate con el administrador en el siguiente enlace:
    
    </br><a href='https://www.configuroweb.com/contacto/'>Contacto</a>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot ConfiguroWeb</title>
    <link rel="stylesheet" href="css/chat.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="title">ChatBot ConfiguroWeb</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hola, ¿cómo puedo ayudarte?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Escribe algo aquí.." required>
                <button id="send-btn">Enviar</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                // iniciar el código ajax
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>

</body>

</html>