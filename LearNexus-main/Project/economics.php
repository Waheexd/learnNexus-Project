<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economics</title>
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
               <a href="#" class="active" id="active"> <li id="subsc"><p style="font-size:30px"> 🧾INDEX🧾</p><span id="boom"><img src="pen.png"  width="30" height="40"></span> </li> </a>

               <a href="#" class="active" id="active"> <li> What is Economics</li></a>
               <a href="#mic" class="active" id="active"> <li> Micro Economics</li></a>
               <a href="#mac" class="active" id="active"> <li>Macro Economics</li></a>
            </ul>
        </div>

      <div class="cntnt"> 
        <span style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 35px;font-weight: 600; color:#2c7da0"> What is Economics</span>

        No one has ever succeeded in neatly defining the scope of economics. Many have agreed with 
        Alfred Marshall, a leading 19th-century English economist, that economics is “a study of mankind 
        in the ordinary business of life; it examines that part of individual and social action which is 
        most closely connected with the attainment, and with the use of the material requisites of
        wellbeing”—ignoring the fact that sociologists, psychologists, and anthropologists frequently 
        study exactly the same phenomena. In the 20th century, English economist Lionel Robbins defined
         economics as “the science which studies human behaviour as a relationship between (given) ends
          and scarce means which have alternative uses.” In other words, Robbins said that economics is 
          the science of economizing. While his definition captures one of the striking characteristics of 
          the economist’s way of thinking, it is at once too wide (because it would include in economics
           the game of chess) and too narrow (because it would exclude the study of the national income or
            the price level). Perhaps the only foolproof definition is that attributed to Canadian-born 
            economist Jacob Viner: economics is what economists do.
         <br><br>

         Difficult as it may be to define economics, it is not difficult to indicate the sorts of 
         questions that concern economists. Among other things, they seek to analyze the forces 
         determining prices—not only the prices of goods and services but the prices of the resources 
         used to produce them. This involves the discovery of two key elements: what governs the way 
         in which human labour, machines, and land are combined in production and how buyers and sellers
          are brought together in a functioning market. Because prices of the various things must be
           interrelated, economists therefore ask how such a “price system” or “market mechanism” hangs 
           together and what conditions are necessary for its survival.<br> <br>

           These questions are representative of microeconomics, the part of economics that deals with the behaviour of individual entities such as consumers, business firms, traders, and farmers. The other major branch of economics is macroeconomics, which focuses attention on aggregates such as the level of income in the whole economy, the volume of total employment, the flow of total investment, and so forth. Here economists are concerned with the forces determining the income of a country or the level of total investment, and they seek to learn why full employment is so rarely attained and what public policies might help a country achieve higher employment or greater price stability.<br><br>

           But these examples still do not exhaust the range of problems that economists consider. There is also the important field of development economics, which examines the attitudes and institutions supporting the process of economic development in poor countries as well as those capable of self-sustained economic growth (for example, development economics was at the heart of the Marshall Plan). In this field the economist is concerned with the extent to which the factors affecting economic development can be manipulated by public policy.<br><br>
    <img src="https://sceptrecollege.edu.pk/wp-content/uploads/2021/04/economics.jpg" alt="eco" id="frstpic">
    
    
    Economics can be classified into two ways:
    <ul >
        <li id="scndlst" style="font-weight: 500; color:rgb(255, 255, 255)">Micro Economics</li>
        <li id="scndlst" style="font-weight: 500;color:white"> Macro Economics</li>
    </ul>

    <span style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 35px;font-weight: 600; color:#2c7da0" id="mic"> Micro Economics</span>

    <!-- ----------------------------section 2----------------------------------------------------- -->

    <div class="sec2"><div class="hdng1"></div>
        <img src="#" alt="">
        microeconomics, branch of economics that studies the behaviour of individual consumers and firms. Unlike macroeconomics, which attempts to understand how the collective behaviour of individual agents shapes aggregate economic outcomes, microeconomics focuses on the detailed study of the agents themselves, by using rigorous mathematical techniques to better describe and understand the decision-making mechanisms involved.
        <br><br>
        
        The branch of microeconomics that deals with household behaviour is called consumer theory. Consumer theory is built on the concept of utility: the economic measure of happiness, which increases as consumption of certain goods increases. What consumers want to consume is captured by their utility function, which measures the happiness derived from consuming a set of goods. Consumers, however, are also bound by a budget constraint, which limits the number or kinds of goods and services they can purchase. The consumers are modeled as utility maximizers: they will try to purchase the optimal number of goods that maximizes their utility, given their budget.<br><br>
        The branch of microeconomics that deals with firm behaviour is called producer theory. Producer theory views firms as entities that turn inputs—such as capital, land, and labour—into output by using a certain level of technology. Input prices and availability, as well as the level of production technology, bind firms to a certain production capacity. The goal of the firm is to produce the amount of output that maximizes its profits, subject to its input and technology constraints.<br><br>
        
        Consumers and firms interact with each other across several markets. One such market is the goods market, in which firms make up the supply side and consumers who buy their products make up the demand side. Different goods market structures require microeconomists to adopt different modeling strategies. For example, a firm operating as a monopoly will face different constraints than a firm operating with many competitors in a competitive market. The microeconomist must therefore take the structure of the goods market into account when describing a firm’s behaviour.<br><br>
        <img src="https://cdn.corporatefinanceinstitute.com/assets/microeconomics2-1.png" alt="">
        <!-- -------------------------------------------------------Macro economics ------------------------------------- -->
        <span style="text-align: center; display:flex; align-items: center; justify-content: center; font-size: 35px;font-weight: 600; color:#2c7da0" id="mac"> Macro Economics</span>
        macroeconomics, study of the behaviour of a national or regional economy as a whole. It is concerned with understanding economy-wide events such as the total amount of goods and services produced, the level of unemployment, and the general behaviour of prices.<br><br>
        Unlike microeconomics—which studies how individual economic actors, such as consumers and firms, make decisions—macroeconomics concerns itself with the aggregate outcomes of those decisions. For that reason, in addition to using the tools of microeconomics, such as supply-and-demand analysis, macroeconomists also utilize aggregate measures such as gross domestic product (GDP), unemployment rates, and the consumer price index (CPI) to study the large-scale repercussions of micro-level decisions.<br><br>


<div class="sec2"><div class="hdng1">Early history and the classical school</div>
        Although complex macroeconomic structures have been characteristic of human societies since ancient times, the discipline of macroeconomics is relatively new. Until the 1930s most economic analysis was focused on microeconomic phenomena and concentrated primarily on the study of individual consumers, firms and industries. The classical school of economic thought, which derived its main principles from Scottish economist Adam Smith’s theory of self-regulating markets, was the dominant philosophy. Accordingly, such economists believed that economy-wide events such as rising unemployment and recessions are like natural phenomena and cannot be avoided. If left undisturbed, market forces would eventually correct such problems; moreover, any intervention by the government in the operation of free markets would be ineffective at best and destructive at worst.<br><br>
       
        <div class="sec2"><div class="hdng1">Monetarism</div>

        In the 1950s the first challenge to the Keynesian school of thought came from the monetarists, who were led by the influential University of Chicago economist Milton Friedman. Friedman proposed an alternative explanation of the Great Depression: he argued that what had started as a recession was turned into a prolonged depression because of the disastrous monetary policies followed by the Federal Reserve System (the central bank of the United States). If the Federal Reserve had started to increase the money supply early on, instead of doing just the opposite, the recession could have been effectively tamed before it got out of control. Over time, Friedman’s ideas were refined and came to be known as monetarism. In contrast to the Keynesian strategy of boosting demand through fiscal policy, monetarists favoured controlled increases in the money supply as a means of fighting off recesssions. Beyond that, the government should avoid intervening in free markets and the rest of the economy, according to monetarists.<br><br>

       <img src="https://media.licdn.com/dms/image/D4D12AQF6NlDDgAADHA/article-cover_image-shrink_600_2000/0/1677434234185?e=2147483647&v=beta&t=mK436jJFEFj7tnYHbTVGAi1FOMyHNGb9930SPc5ARek" alt="">
    </div>

</div>
    </div>
</body>

</html>