<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_content.css">
</head>

<body>
    <div class="h1">
        <img src="LearNexus-removebg-preview.png" alt="logo" id="logo">
        <?php
        // Start the session
        session_start();
        
        // Check if the user is logged in
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            // If logged in, redirect to majorproj.html
            echo '<a href="majorproj.html"><button>Home</button></a>';
        } else {
            // If not logged in, redirect to minorproj.html
            echo '<a href="minorproj.html"><button>Home</button></a>';
        }
        ?>
    </div>
    <div class="bdy">
        <div class="lftmrgn">
            <ul>
                <a href="#" class="active" id="active">
                    <li id="subsc"> <p style="font-size:30px"> 🧾INDEX🧾</p><span id="boom"><img src="pen.png" width="30" height="40"></span> </li>
                </a>
                <a href="#imp">
                    <li>Importance of History</li>
                </a>
                <a href="#div">
                    <li>Division of Humman History</li>
                </a>
                <a href="#pre">
                    <li>Pre-History</li>
                </a>
                <a href="#pro">
                    <li>Proto-History</li>
                </a>
                <a href="#his">
                    <li>Historical Period</li>
                </a>
            </ul>
        </div>


        <div class="cntnt">
            <span
                style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0">What
                is History?</span><br>History is the study of past events, particularly human affairs. It encompasses a
            wide range of subjects, including political, social, economic, cultural, military, and intellectual
            developments. Historians use various methods to analyze and interpret historical events, including archival
            research, textual analysis, archaeological excavation, and oral history.
            <br><br>


            <img src="https://www.euroschoolindia.com/wp-content/uploads/2023/07/importance-of-history-scaled-1.jpg"
                alt="" id="frstpic" style="border-radius:4px;">
            <br>
            <br>


            <span
                style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0"id="imp">Importance
                of History</span><br>
            History is important for several reasons:
            <ul>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Understanding the Present:</span></a>
                    History provides essential context for understanding current events, trends, and issues. By studying
                    the past, we can gain insights into the origins of contemporary societies, cultures, political
                    systems, and conflicts. Understanding historical precedents helps us make informed decisions and
                    navigate complex social, political, and economic landscapes.</li></a>

                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Learning from Mistakes and
                            Successes:</span></a>History offers valuable lessons from the successes and failures of past
                    civilizations, societies, and individuals. By examining historical events and their outcomes, we can
                    learn from past mistakes and successes, avoid repeating negative patterns, and adopt strategies that
                    promote progress, peace, and prosperity.</li></a>

                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Cultural Identity and Heritage:</span></a>
                    History plays a crucial role in shaping cultural identity and heritage. It helps individuals and
                    communities understand their roots, traditions, and shared experiences, fostering a sense of
                    belonging and pride. By preserving and studying historical artifacts, monuments, literature, and
                    traditions, we can celebrate diverse cultures and appreciate the richness of human heritage.</li>
                </a>

                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Promoting Empathy and
                            Tolerance:</span></a> Studying history encourages empathy and tolerance by exposing us to
                    different perspectives, experiences, and worldviews. It allows us to walk in the shoes of people
                    from diverse backgrounds and understand the complexities of human motivations and actions. By
                    recognizing the commonalities and differences among societies throughout history, we can cultivate
                    mutual respect and understanding.</li></a>

                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Inspiration and Motivation:</span></a>
                    History is full of stories of courage, resilience, innovation, and progress. By learning about the
                    achievements and contributions of past individuals and civilizations, we can find inspiration and
                    motivation to overcome challenges, pursue our goals, and make positive changes in the world.</li>
                </a>

                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Critical Thinking and Analytical
                            Skills:</span></a> Studying history cultivates critical thinking, analytical skills, and the
                    ability to evaluate evidence and arguments. Historians must analyze primary and secondary sources,
                    interpret conflicting accounts, and construct coherent narratives based on available evidence. These
                    skills are valuable in various fields, including academia, law, journalism, policymaking, and
                    business.</li></a>

                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Preserving Memory and Identity:
                        </span></a> History serves as a collective memory, preserving the stories, achievements,
                    struggles, and sacrifices of past generations. By remembering and honoring the past, we can ensure
                    that important lessons are not forgotten and that the legacies of those who came before us continue
                    to inspire future generations.

                </li></a>
            </ul>
            <br><br>
            <span
                style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0" id="div">Division
                of Human History</span><br>
            The term "era" in history refers to a significant period of time characterized by particular social,
            political, cultural, or technological developments. Eras provide frameworks for organizing and understanding
            historical events within broader chronological contexts. Historians use various criteria, such as major
            political changes, cultural shifts, technological advancements, or economic transformations, to delineate
            different eras in human history. Here are some examples of significant eras in history:
            <ul>
                <li id="scndlst">Ancient Era</li>
                <li id="scndlst">Medieval Era</li>
                <li id="scndlst">Renaissance</li>
                <li id="scndlst">Early Modern Era</li>
                <li id="scndlst">Industrial Revolution</li>
                <li id="scndlst">Modern Era</li>
            </ul>
            <img src="https://play-lh.googleusercontent.com/WqctltcDyUI2vQSEd3JSe3QDvWB4ajTN5pq_IeE6_N1JemeZe17mMVp9sWYje9EM5j0"
                alt="" id="frstpic" style="border-radius:4px;height:200px;width:200px;">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAmAA9tFfCfAGg_7OV4dFmIBDX7nJ9sDEgjA&s"
                alt="" id="frstpic" style="border-radius:4px;height:200px;width:200px;margin-left:80px;">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBx-ms7H-l7qiq2EIJSFWP04PGZgoZpuPcbF0ppYZF&s"
                alt="" id="frstpic" style="border-radius:4px; height:170px;width:250px;margin-left:80px;">

            <br>
            <!-- section 2-->
            <ul>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Ancient Era:</span></a>The ancient era
                    encompasses the earliest known civilizations, such as Mesopotamia, Ancient Egypt, Ancient Greece,
                    and Ancient Rome. It spans from the development of writing (around 3500 BCE) to the fall of the
                    Western Roman Empire (476 CE) or the fall of the Eastern Roman Empire (1453 CE), depending on the
                    historical perspective.
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Medieval Era:</span></a>The medieval era,
                    also known as the Middle Ages, spans from the fall of the Western Roman Empire (476 CE) to the
                    beginning of the Renaissance (around the 14th century). It is characterized by feudalism, the rise
                    of Christianity, the spread of Islam, the development of medieval European kingdoms, and significant
                    cultural and intellectual achievements in fields such as art, architecture, and philosophy.</li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Renaissance:</span></a>The Renaissance,
                    meaning "rebirth," was a period of cultural, artistic, and intellectual revival in Europe that began
                    in Italy in the 14th century and spread across the continent during the 15th and 16th centuries. It
                    marked the transition from the medieval to the modern era, with significant advancements in art,
                    literature, science, and exploration.</li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Early Modern Era:</span></a> The early
                    modern era encompasses the period from the late 15th century to the late 18th century. It includes
                    the Age of Exploration, the Protestant Reformation, the Scientific Revolution, the Enlightenment,
                    and the rise of absolute monarchies and nation-states in Europe.</li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Industrial Revolution:</span></a>The
                    Industrial Revolution, which began in Britain in the late 18th century and spread to other parts of
                    the world during the 19th century, marked a significant shift from agrarian economies to
                    industrialized societies. It was characterized by technological innovations, such as the steam
                    engine, factory production, and urbanization, which transformed economies, societies, and daily
                    life.</li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Modern Era:</span></a>The modern era,
                    often considered to begin with the French Revolution in 1789, encompasses the period from the late
                    18th century to the present day. It includes major historical events such as the American and French
                    Revolutions, the rise of democracy, nationalism, imperialism, two world wars, the Cold War,
                    globalization, and the Information Age.</li></a>

            </ul>
        

    <span
        style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0" id="pre">Pre-History</span><br>Prehistory
    refers to the time before written records were kept, and societies relied on oral traditions and archaeological
    evidence to understand the past.
    <br>
    <ul>
        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Absence of Written Records:</span></a>
            The primary characteristic of prehistory is the absence of written language, making it challenging to
            ascertain specific events and historical figures.
        </li></a>

        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Hunter-Gatherer Societies:</span></a>
            During prehistory, humans lived as hunter-gatherers, relying on hunting, fishing, and gathering wild plants
            for sustenance.
        </li></a>

        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Development of Tools:</span></a>
            Prehistoric humans gradually developed tools and technologies, such as stone implements and early forms of
            fire, which played a crucial role in their survival and progress.

        </li></a>
        <br><br>


        <img src="https://i2.wp.com/www.differencebetween.com/wp-content/uploads/2010/12/Difference-Between-History-and-Prehistory_1.jpg" alt=""
            id="frstpic" style="border-radius:4px;">
        <br>
        <br>
    </ul>

    <span
        style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0" id="pro">Proto-History</span><br>Proto-history is an intermediary phase between prehistory and the historical period, characterized by the emergence of written records but incomplete or limited historical documentation.
    <br>
    <ul>
        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Early Writing Systems:</span></a>
            During the proto-historic period, writing systems started to develop, but they might not have been fully standardized or widely used.
        </li></a>

        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Emergence of Early Civilizations:</span></a>
            Proto-history coincides with the rise of early civilizations, such as the ancient Mesopotamian, Egyptian, and Indus Valley civilizations, where written records began to document significant events and administrative matters.
        </li></a>

        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Oral Traditions and Legends:</span></a>
            While written records were emerging, oral traditions and legends continued to play a crucial role in preserving cultural and historical knowledge.

        </li></a>
        <br><br>


        <img src="https://qph.cf2.quoracdn.net/main-qimg-dcebdc39eb9f576eb9ba15a863e39acd-lq" alt=""
            id="frstpic" style="border-radius:4px;">
        <br>
        <br>
    </ul>

    <span
        style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0" id="his">Historical Period</span><br>The historical period is characterized by abundant and well-documented written records, providing a comprehensive understanding of societies, events, and individuals from the past.
    <br>
    <ul>
        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Well-Recorded History:</span></a>
            The historical period is distinguished by the presence of extensive written records, allowing for a detailed and accurate analysis of past civilizations and historical events.
        </li></a>

        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Flourishing Civilizations:</span></a>
            Major ancient civilizations, such as the Greeks, Romans, Persians, Chinese, and others, thrived during this era, leaving behind rich historical documentation.
        </li></a>

        <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Advancements in Knowledge:</span></a>
            The historical period witnessed significant advancements in various fields, including science, philosophy, arts, and governance.
        </li></a>
        <br><br>


        <img src="data:image/jpeg;base64,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" alt=""
            id="frstpic" style="border-radius:4px;">
        <br>
        <br>
    </ul>


    </div>
    </div>
</body>

</html>