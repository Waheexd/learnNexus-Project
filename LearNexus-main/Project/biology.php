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
                   <li id="subsc"><p style="font-size:30px"> 🧾INDEX🧾</p><span id="boom"><img src="pen.png"  width="30" height="40"></span> </li> </a>

                </a>
                <a href="#imp">
                    <li>Importance of Biology</li>
                </a>
                <a href="#bra">
                    <li>Branches of Biology</li>
                </a>
                <a href="#adv">
                    <li>Advances to the 20th Century</li>
                </a>
            </ul>
        </div>

        <div class="cntnt"><span
                style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0">What
                is Biology?</span> Biology is the scientific study of life. It is a natural science with a broad scope
            but has several unifying themes that tie it together as a single, coherent field. Biology encompasses the
            study of all living organisms, from the smallest bacteria to the largest whales, and the interactions
            between these organisms and their environment.

            This field includes the Anatomy, Physiology, Ecology, and Morphology of living organisms. The definition of
            biology includes the relationship between plants, animals, microorganisms, and their relation to the
            environment.

            Biology is the story of how life unfurled on the Earth. It is the branch of science that deals with life
            forms and life processes. In earlier times, Biology was only limited to the knowledge of the human body and
            its function as it formed the basis for medical practice. Fundamental issues regarding how life originated,
            growth of the biodiversity, and the evolution of living creatures according to different habitats intrigued
            the biologists.

            The term “Biology” in Greek is divided into two parts – bios = life; logos = study, which translates into
            study of life. Biology is a part of Science, along with Physics and Chemistry. These days Biology is
            commonly referred to as “Life Sciences”.
            <br><br>
            <img src="https://thumbs.dreamstime.com/b/biology-science-theory-doodle-handwriting-tool-model-icon-white-paper-background-used-school-education-document-64829033.jpg"
                alt="" id="frstpic" style="border-radius:4px;"><br><br>


            <span
                style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0" id="imp">Importance
                of Biology</span><br>
            The study of biology has helped humans advance very far in their field. Few of the examples are given below:
            <ul>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Medicine:</span></a> The basis of
                    contemporary medicine is biology. Scientists have been able to enhance surgical techniques, produce
                    new vaccinations to prevent diseases, and find novel treatments for diseases by knowing how the
                    human body functions.</li></a>

                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Agriculture:</span></a> Developing
                    innovative agricultural technology to increase food production and enhance the quality of our food
                    supply requires a strong understanding of biology.</li></a>

                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Protection of the environment:</span></a>
                    Understanding and safeguarding the environment depend on biology.Biologists research how organisms
                    interact with their surroundings and create plans to save threatened species and ecosystems.</li>
                </a>
            </ul>
            Biology is also a key connection point for the other sciences. Knowing general biology is more than just
            useful, it’s vital to understanding the other scientific disciplines.

            Jonathan Visick, professor of biology at North Central College, said, “Science majors, of course, need to
            know biology (because) there are many overlaps with biology in other science fields. For example, students
            in other science majors could wind up working in neuroscience (which combines psychology and biology,
            bioinformatics and medical informatics (biology and computer science), ecological modeling or epidemiology
            (math and biology), biophysics, biomedical engineering, or pharmacology (biology and chemistry).”

            One similar field to biology is physiology, but there are key differences between them. If you’re trying to
            choose between biology and another field, you can read our guides “Physiology vs Biology” and “Biology vs
            Chemistry Majors” for help.
            <br><br>
            <span
                style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0" id="bra">Branches
                of Biology</span><br>
            Various concepts are studied in the field of Physics. Physics is divided into categories based on the topics
            studied in those subfields.
            <ul>
                <li id="scndlst">Biochemistry</li>
                <li id="scndlst">Molecular biology</li>
                <li id="scndlst">Cell biology</li>
                <li id="scndlst">Genetics</li>
                <li id="scndlst">Microbiology</li>
                <li id="scndlst">Botany</li>
                <li id="scndlst">Zoology</li>
                <li id="scndlst">Physiology</li>
                <li id="scndlst">Ecology</li>
                <li id="scndlst">Evolutionary biology</li>
            </ul> <br><br>
            <img src="https://static.javatpoint.com/definition/images/biochemistry-definition.png" alt="" id="frstpic"
                style="border-radius:4px;height:200px;width:200px;">

            <img src="https://img.freepik.com/premium-vector/vector-molecular-biology-round-concept-illustration-thin-line-style_104589-20.jpg"
                alt="" id="frstpic" style="border-radius:4px;height:200px;width:200px;margin-left:80px;">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1lUYa4VTBmQpvaN-Db2uGL0eI0Js-awebWng3DG9MAA&s"
                alt="" id="frstpic" style="border-radius:4px; height:200px;width:250px;margin-left:80px;">

            <img src="https://img.freepik.com/premium-vector/genetics-logo-creative-technology-science-bio-tech-medical-design-web-dna-logo-illustration-people_669794-470.jpg"
                alt="" id="frstpic" style="border-radius:4px;height:200px;width:200px;margin-left:150px;">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf7o10gbr1btGYjoYSTKDJbyG9f33JbybgT2PJlZpBgA&s"
                alt="" id="frstpic" style="border-radius:4px;height:180px;width:230px;margin-left:150px;">

            <img src="https://cdn1.byjus.com/wp-content/uploads/2016/07/180.png" alt="" id="frstpic"
                style="border-radius:4px;height:200px;width:200px;">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy-YY5QafkvP4AcT9xOexGM0M5QdVOwdgq_tk014Rsmw&s"
                alt="" id="frstpic" style="border-radius:4px;height:200px;width:200px;margin-left:80px;">

            <img src="https://jssuni.edu.in/jssaher/dental-college/img/physiology-logo.jpeg" alt="" id="frstpic"
                style="border-radius:4px; height:200px;width:250px;margin-left:80px;">

            <img src="https://cdn.sanity.io/images/kts928pd/production/722d91de01698741017f4ffa5ebdc472ba85bd98-731x731.png"
                alt="" id="frstpic" style="border-radius:4px;height:200px;width:200px;margin-left:150px;">

            <img src="data:image/jpeg;base64,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"
                alt="" id="frstpic" style="border-radius:4px;height:180px;width:230px;margin-left:150px;">

            <br><br>
            <!-- section 2-->
            <ul>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Biochemistry:</span></a>The word
                    “Biochemistry’ was coined by the German chemist Carl Neuberg in 1930. Biological chemistry, often
                    known as biochemistry, is a laboratory-based branch of Biology that combines biology and chemistry.
                    It explores chemical processes that occur in and around living organisms and gives rise to the
                    complexity of life.
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Molecular Biology:</span></a>Molecular
                    Biology is the key to solving the working of the biological processes in our body. The term
                    “Molecular Biology” refers to the ‘molecular’ part of the biological world. Starting from cells,
                    right up to organ systems, all biological entities are studied under molecular biology. In this
                    article, we will study what molecular biology is, Important topics in molecular biology, The role of
                    a molecular biologist, different molecular biology techniques, and careers in molecular biology.
                </li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Cell Biology:</span></a>Cell Biology is
                    the branch of Biology that includes the study of Cells known as structural and functional units of
                    life. Cells are the smallest entities responsible for living beings’ characteristics. Cell biology
                    encompasses the study of prokaryotic and eukaryotic cells, including the study of bacteria and
                    animals. The study of many aspects of Cell behavior, structure, and function is covered in this
                    article on the discipline of Cell biology.</li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Genetics:</span></a> Genetics is the study
                    of genes, genetic variation, and transmission of traits in organisms. In the 19th century, Gregor
                    Mendel was the first to study genetics scientifically. Mendel observed pea plants to study trait
                    inheritance and gave three fundamental laws of inheritance: the Law of Dominance, the Law of
                    Segregation, and the Law of Independent Assortment. Genetics helps us to diagnose and treat various
                    genetic diseases, improve crop yields, and contribute to our understanding of evolution.</li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Microbiology:</span></a>Microbiology as
                    the name suggests micro means tiny entities, and biology means the study of living organisms. In
                    simpler terms, microbiology means the study of small living things that we can’t see with the naked
                    eye. This field helps us understand how these microorganisms function, their roles in nature, and
                    their impact on our health. From the bacteria in yogurt to the viruses causing illnesses,
                    microbiology plays a major role in shaping our lives by studying all about the microorganisms. It
                    delves into their structure, function, behavior, and interactions with the environment.

                    This field plays a major role in fields like medicine, agriculture, and environmental science.
                    Microorganisms have also played a key role in the evolution of Earth and other organisms. The most
                    useful instrument for studying these microorganisms is called a microscopy. Examples of these
                    microscopic organisms are bacteria, viruses, fungi, algae, and protozoa.</li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Botany:</span></a> Botany is the branch of
                    biology that deals with the study of plants. Botany helps us to understand plant structure,
                    function, and aspects of plants. Botany is the study of the structure, development, reproduction,
                    and growth of plants and plant-like organisms. The people who study botany are known as Botanists.
                    The study of botany has its importance in many fields like Agriculture, Medicine, Horticulture, etc.
                    Botany is further specialized into fields that deal with different aspects of plants such as
                    Taxonomy, which is related to the classification of plants, Ecology which is all about how a plant
                    interacts with its environment and so on.</li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Zoology:</span></a>Zoology can be easily
                    defined as the study of animals. Zoology includes all the members of the kingdom Animalia. Zoology
                    encompasses the study of the classification, anatomy, physiology, behavior, and ecology of animals.
                    Zoology explores all the details of the diverse animal kingdom, from invertebrates to vertebrates.
                    The study of zoology significantly contributes to the understanding of the animal diversity. The
                    study of zoology also provides a wide range of career options other than the vast amount of
                    knowledge about the animals around us. </li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Physiology:</span></a> Physiology is the
                    fascinating study of how living organisms function and maintain life. Physiology explores the
                    intricate mechanisms that keep our bodies ticking. Delving into the diverse world of physiology
                    reveals the intricate ballet of cells, organs, and organ systems working seamlessly to sustain life.
                    The study of physiology is vast and diverse it is further divided into multiple subparts. One such
                    sub-part of physiology is human physiology which is the study of how the human body functions and
                    maintains life.

                    Human physiology helps us to study and understand all the complex mechanisms of the human body that
                    keep us alive. With the help of human physiology, we can explore the secrets of our body to ensure
                    that we can function well throughout our natural lifetime and our body can cope with the impact of
                    various diseases and disorders.</li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Ecology:</span></a>Ecology is the study of
                    the interactions between different species and their surroundings. The Greek terms “Oikos” and
                    “Logos” (which translate to “home, habitat, or place of residence) are the roots of the English word
                    “ecology.” German zoologist Ernst Haeckel first used the word “ecology” in 1866. All living things
                    and their surroundings are interconnected. They have a variety of effects on one another. The
                    environment has a significant influence on the life cycles of many organisms that inhabit it. Living
                    things modify how they function in response to environmental changes. These kinds of linkages
                    between species and their interactions with the natural world are the subject of ecology.</li></a>
                <li><a href="#"><span style="font-weight: 600; color:#2c7da0">Evolutionary biology:</span></a>
                    Evolutionary biology is a biological process in which inherited traits of any individual or
                    population start transforming or shifting from one generation to another. Evolution occurs through
                    genetic drift and natural selection which causes evolutionary changes. These evolutionary changes
                    can be prevalent in populations. To explain why organisms are suited to their physical and
                    biological surroundings, Charles Darwin and Alfred Russel Wallace separately developed the idea of
                    evolution by natural selection in the middle of the 19th century.</li></a>
            </ul>

            <span
            style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 700; color:#1d6e91"id="adv"><u>Advances to the 20th Century :</u></span><br>

            <span
                style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0">The discovery of blood circulation</span><br>
                In the early 17th century, the English physician William Harvey, who studied at Padua with one of Vesalius’s students, became the first to describe the full circulation of the blood through the human body. Prior to Harvey, blood was supposed to be consumed by the body and produced anew rather than continually circulated. It had also been suggested that the blood flowed through pores between the two halves of the heart and that the heart produced a vital heat, which was tempered by the air from the lungs. In his own work, however, Harvey demonstrated that the heart expands passively and contracts actively. By measuring the amount of blood flowing from the heart, he concluded that the body could not continuously produce that amount. He also was able to show that blood is returned to the heart through the veins, postulating a connection (the capillaries) between the arteries and veins that was not to be discovered until later in the 17th century. Harvey was also interested in embryology, to which he made a significant contribution by suggesting that there is a stage (the egg) in the development of all animals during which they are undifferentiated living masses. A biological dictum, ex ovo omnia (“everything comes from the egg”), is a summation of that concept.
                <br><br>

                <span
                style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0">The establishment of scientific societies</span><br>
                development of great importance to science was the establishment in Europe of academies or societies; they consisted of small groups of men who met to discuss subjects of mutual interest. Although some of the groups enjoyed the financial patronage of princes and other wealthy members of society, the members’ interest in science was the sole sustaining force. The academies also provided freedom of expression, which, together with the stimulus of exchanging ideas, contributed greatly to the development of scientific thought. One of the earliest of these organizations was the Italian Accademia dei Lincei (Academy of the Lynx-eyed), founded in Rome around 1603. Galileo Galilei made a microscope for the society; another of its members, Johannes Faber, an entomologist, gave the instrument its name. Other academies in Europe included the French Academy of Sciences (founded in 1666), a German Academy in Leipzig, and a number of small academies in England that in 1662 became incorporated under royal charter as the Royal Society of London, an organization that was to have considerable influence on scientific developments in England.

                In addition to providing a forum for the discussion of scientific matters, another important aspect of those societies was their publications. Before the advent of printing there were no convenient means for the wide dissemination of scientific knowledge and ideas; hence, scientists were not well informed about the works of others. To correct that deficiency in communications, the early academies initiated several publications, the first of which, Journal des Savants (originally Journal des Sçavans), was published in 1665 in France. Three months later, the Royal Society of London originated its Philosophical Transactions. At first the publication was devoted to reviews of work completed and in progress; later, however, the emphasis gradually changed to accounts of original investigations that maintained a high level of scientific quality. Gradually, specialized journals of science made their appearance, though not until at least another century had passed.
                <br><br>

                <span
                style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 30px;font-weight: 500; color:#2c7da0">The development of the microscope</span><br>
                The magnifying power of segments of glass spheres was known to the Assyrians before the time of Christ; during the 2nd century CE, Claudius Ptolemy, an astronomer, mathematician, and geographer at Alexandria, wrote a treatise on optics in which he discussed the phenomena of magnification and refraction as related to such lenses and to glass spheres filled with water. Despite that knowledge, however, glass lenses were not used extensively until around 1300 (an anonymous person invented spectacles for the improvement of vision probably in the late 1200s). That invention aroused curiosity concerning the property of lenses to magnify, and in the 16th century several papers were written about such devices. Then, in the late 16th century, the Dutch optician Hans Jansen and his son Zacharias invented the compound microscope. The utility of that instrument in the biological sciences, however, was not realized until the following century. Following subsequent technological improvements in the instrument and the development of a more-liberal attitude toward scientific research, five microscopists emerged who were to have a profound affect on biology: Marcello Malpighi, Antonie van Leeuwenhoek, Jan Swammerdam, Nehemiah Grew, and Robert Hooke.
                <br><br>
        </div>

    </div>
    </div>
</body>

</html>