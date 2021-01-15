<?php
define("PAGE_TITLE", "Our Impact");
include("./atributes/header.php");
?>

<main>
    <div class="hero impact--hero flex">
            <h1 class="hero--title">Our Impact</h1>
    </div>

    <div class="impact--intro flex">
        <h2 class="impact--header">We've worked with over 750 young people in the last year alone!</h2>
        <ul class="impact--list">
            <li class="impact--text">86% of young people we worked with said the Sound Communities helped them feel more confident after lockdown</li>
            <li class="impact--text">95% said they enjoyed the activities and learnt something new</li>
            <li class="impact--text">85% said our activities improved their wellbeing</li>
            <li class="impact--text">97% said they felt more included in their community</li>
        </ul>
    </div>

    <div class="impact--grid">
        <div class="home--grid" onclick="scrollDown('report')">
            <img class="home--grid--image" src="./Images/impact-1.jpg" alt="4 Ladies laughing">
            <h2 class="home--grid--title">Our Impact Report</h2>
        </div>
        <div class="home--grid" onclick="scrollDown('casestudy')">
            <img class="home--grid--image" src="./Images/impact-4.jpg" alt="">
            <h2 class=" home--grid--title">Case Studies</h2>
        </div>
        <div class="home--grid" onclick="scrollDown('participant')">
            <img class="home--grid--image" src="./Images/impact-2.jpg" alt="">
            <h2 class="home--grid--title">What our Young People Say</h2>
        </div>
        <div class="home--grid" onclick="scrollDown('partner')">
            <img class="home--grid--image" src="./Images/impact-3.jpg" alt="">
            <h2 class="home--grid--title">What our Partners Say</h2>
        </div>
    </div>

    <div class="impact--report flex" id="report">
        <h2 class="impact--header">2019 - 2020 Impact Report</h2>
        <iframe class="impact--pdf" src="./atributes/impactReport.pdf" frameborder="0"></iframe>
    </div>


    <div class="impact--casestudy" id="casestudy">
        <h2 class="impact--header">Case Studies</h2>

        <h3 class="case--name">Ryan</h3>
        <p class="case--subtitle">Background</p>
        <p class="case--text">Ryan was spotted looking through the studio window during the FM broadcast (2015) and one of our staff invited him to take part in the broadcasts.</p>
        <p class="case--subtitle">Key Issues</p>
        <p class="case--text">Ryan has issues concentrating for substantial periods of time and has low confidence. His relationships with his peers often times get into difficulties as he struggles to understand boundaries and other YP seem to get frustrated with him easily. He appears lacking in opportunities and his parents appear to work long hours at the local pub. He reports spending a lot of time playing computer games or in the bar with adults drinking. His mother suffers from mental illness.</p>
        <p class="case--subtitle">Testimonials</p>
        <p class="case--text">“Ryan has definitely built his confidence since working with the radio. He regularly discusses how he is getting on with members of staff. Previously, he has been very quiet and shy, but his personality within lessons is more outgoing and extrovert, now he knows he has something outside of school that he is good at and enjoys.” <span class="case--ref">Head of Year, Paignton Community and Sports Academy. 2016</span></p>
        <p class="case--text">“In the time that I've worked with Ryan I have seen a considerable change in him. His speaking and listening skills have dramatically improved, he had a very short attention span which made it very difficult to discuss ideas with him. He is now able to work confidently as part of a team, especially allowing colleagues time to speak and finish sentences.”<span class="case--ref">Youth Worker, Parkfield 2016</span></p>
        <p class="case--text">“Since Ryan has been attending and taking part with the radio at Park field he has become more confident and out going. He never stops talking about what is going on at the radio club. He enjoys taking part in the trips and the shows as well.”<span class="case--ref">Kerry, Ryan’s mother. 2016</span></p>
        <p class="case--subtitle">What Ryan Says</p>
        <p class="case--text">“I feel a lot more confident to talk to people generally ?I get on well with people a lot easier. And knowing other people who do it I have met a lot more people. I actually feel connected to other people. It makes me feel I’m helping someone else by letting them hear music which is fresh and new. It makes me feel a lot more alive inside and I get to experience all the fun. If you compare me from my first FM show to now I sounded a bit like a robot back then now it’s more natural. When I first started listening to myself back it used to be horrible, it just sounded so wrong. Now it sounds fine it, it sounds perfect and I feel good about myself and everybody helps me. Love it. Nothing better I could be doing right now."</p>
        <p class="case--subtitle">The Future</p>
        <p class="case--text">He will soon take his driving license and start to peer support new recruits. He has decided to take Media Studies at GCSE and is planning to get involved in hospital radio too.</p>
        
        
        <h3 class="case--name">Joe</h3>
        <p class="case--subtitle">Background</p>
        <p class="case--text">We have seen a real change in Joe (not real name) since his involvement with Ocean Youth. Joe has progressed during his time at Ocean Youth from a shy boy unwilling to put himself forward for extra curricular activities to a confident presenter now exploring drama and radio opportunities independently at his new secondary school. Joe obviously loves making radio he positively glows when presenting and comes to his shows having done excellent creative preparation. He independently researches other shows and is proving to be very promising new member of the team.</p>
        <p class="case--subtitle">Testimonial</p>
        <p class="case--text">“He has really grown in confidence since belonging to the show and has really enjoyed the events you have put on. He has made new friends and shown a personal interest into something he would never have pursued. He is really interested in following this as a career choice and looks forward to the times that he has at the library. We have really noticed a difference in him and how he has grown up his conversation and humour have grown up to. He helped at my Rowcroft Xmas fayre yesterday selling cakes, he was not shy and had good banter with the customers so much so I could leave him on the stall alone. We are very proud at what he has achieved with you and hope it continues.” <span class="case--ref">Joe’s father, November 2017</span></p>

        <h3 class="case--name">Chloe</h3>
        <p class="case--subtitle">Background</p>
        <p class="case--text">Chloe came to us as part of the two year Speak Up 2012 radio project (designed by Kate Rudman, as consultant/freelancer with Soundart Radio.) She attended Paignton Community Sports Academy and self-referred onto the project through their optional Activities week. She then peer-educated the following year’s cohort from her school.</p>
        <p class="case--subtitle">Key Issues</p>
        <p class="case--text">Chloe has always done well at school. She is an intelligent, very resourceful and independent girl with a passion for live music and media.</p>
        <p class="case--subtitle">What Happened</p>
        <p class="case--text case--text--nomargin">Chloe became a formative member of the core Ocean Youth team developing a show and a team to deliver one for the most popular regular weekly online shows at the station. She has thrived at Ocean Youth, seeing the opportunity to develop her skills, confidence and make a difference to the cultural landscape for Torbay for young people. She has:</p>
        <ul class="case--list">
            <li>Taken a leading role in both FM broadcasts</li>
            <li>peer-mentored many other YP</li>
            <li>produced Parklife, a listing show for young people</li>
            <li>created features and jingles around her trips to carnival, Boardmasters Festival, Student Radio Conference in Exeter, Radio 1, Rado 1 Xtra and Reprezent FM.</li>
            <li>took a leading role in developing the visual radio production for our Radio Drama, “Lift.”</li>
            <li>Attended BBC 1’s Radio Academy</li>
        </ul>
        <p class="case--text">Chloe has earnt an OCR in Social Entrepeneurship through a social action project connected to the Torbay Integrated Youth Support Service. She is also one of the five young people at Ocean Youth undertaking the Bronze Arts Award. Chloe is already using the contacts made through her radio work to secure work placements with organisations such as Fotonow.</p>
        <p class="case--subtitle">What Chloe Says</p>
        <p class="case--text">“Radio has made me unbelievably comfortable and positive about myself. Radio has allowed me to take the responsibility of presenting a show and present how I feel about issues and stuff that effects me, all while giving me the freedom to express my personality. It's even helped create a career path for me as i'm constantly being given opportunities that help me learn about possible career routes and the skills needed for them.
            Radio has definitely allowed me to be more connected with other young people in Torbay. I've been involved in so many events that not only allows me to socialise with my peers but also allows us to share out skills and experiences. Events like this include our involvement with The Social Action Project and our radio drama 'LIFT'. Simply from being involved in these events i've become so much more interested in sharing the skills i've learned through radio with other young people. But also just talking to such a different range of people i've found it fascinating to learn and communicate with them.”
        </p>
        <p class="case--subtitle">The Future</p>
        <p class="case--text">We hope to employ Chloe as soon as she is 18</p>
    </div>

    <div class="impact--participants" id="participant">
        <h2 class="impact--header">What Our Participants Say</h2>
        
        <div class="part--grid">
            <div>
                <p class="part--text">"Thanks to radio I'm so much more confident and much happier. I used to hide myself away but now I'm not afraid to speak. ?I speak in class and have made loads of new friends and that's thanks to Ocean Youth and all the opportunities it's given me."</p>
                <p class="part--subtitle">Rohan, May 2018 on air unprompted</p>
            
            </div>
            <div>
                <p class="part--text">“It was great - such a good experience. I thought it would be really formal and really like everything had to be done by this and it wasn’t. It was really cool ‘cos we just had fun with it and did what we wanted really and I’m definitely coming back ‘cos this was great.”</p>
                <p class="part--subtitle">Oliver, Youth Genesis, Radio Routes, 2016</p>
            </div>
    
            <div>
                <p class="part--text">"I liked asking the questions and getting answers from people I didn't really know and I felt a bit braver."</p>
                <p class="part--subtitle">Foxhole, Radio Routes 2016</p>
            </div>
    
            <div>
                <p class="part--text">"Doing this radio broadcast made me feel more confident because it feels like you're not really talking to an audience but more like you're talking to yourself."</p>
                <p class="part--subtitle">Totally Teenagers, Radio Routes 2016</p>
            </div>
    
            <div>
                <p class="part--text">"It think it was pretty entertaining cos I don't really get a chance to do things like this and it was the first time I've ever been live on the radio. I would defo do it again."</p>
                <p class="part--subtitle">The Edge, Radio Routes 2017</p>
            </div>
    
            <div>
                <p class="part--text">"I remember from the first show I was nervous and stuttering and now I'm more confident and not stuttering any more so I think it's a really good way you bring up your self-esteem."</p>
                <p class="part--subtitle">Nia, South Devon College, 2016</p>
            </div>
    
            <div>
                <p class="part--text">"I get scared going on the stage [at school] to do a performance 'cause you can see the people. But when you're on the radio, when you're sat in the recording studio, it's like, talking you don't feel scared or anything. It builds your confidence loads, knowing you can say stuff but no one's going to boo me or whatever."</p>
                <p class="part--subtitle">Lauren, Speak Up, 2012</p>
            </div>
    
            <div>
                <p class="part--text">" It makes me feel I'm helping someone else by letting them hear music which is fresh and new. I was actually going to do a hospital radio pretty soon so big stuff so I actually feel connected to other people."</p>
                <p class="part--subtitle">JJ, Parkfield, 2016</p>
            </div>
    
            <div>
                <p class="part--text">"I think its very important as there's some kids out there who don't have many people to talk to and Ocean Youth offers that for some young people. It's important to create something for young people to do that allows them to express themselves and let people know what they like to get up to."</p>
                <p class="part--subtitle">Millie, South Devon College 2016</p>
            </div>
            <div>
                <p class="part--text">"I think it's really beneficial for young people to have a radio station that's all their own because it makes them feel that they really have a voice within their own community and they can get across what they think about things and it means that they are not constantly being told what to do by the older generation and I think that's really important for a young community."</p>
                <p class="part--subtitle">Sian, Parkfield 2015</p>
            </div>
        
        </div>
    </div>

    <div class="impact--partner" id="partner">
        <h2 class="impact--header">What Our Partners Say</h2>

        <div class="part--grid partner--grid">
            <div>
                <p class="part--text">"Sound Communities are so encouraging and positive they inspire and connect with our young people they tried new ideas and really took ownership of the broadcast... perfect for all our young people."</p>
                <p class="part--subtitle">Chris, The Edge. Radio Routes 2017</p>
            </div>
            <div>
                <p class="part--text">"The project so far has been fantastic, the young people have had a real buzz from taking part and the radio station has brought a whole feeling of community to the youth centre."</p>
                <p class="part--subtitle">Paul Taylor, Learning Manager, Parkfield, 2016</p>
            </div>
            <div>
                <p class="part--text">"I have witnessed how this work has developed confidence in those young people who do not know how to express themselves, or do not believe that their voice is going to be heard when they speak out. ..it has raised the aspirations and self esteem of many young people and kept them engaged where many other activities and media have failed. This is an area where the demographic is disproportionately older people. The project creates a community of youth around voice and music and has been successful at overcoming the barriers we otherwise see for disadvantaged young people with direct or visual engagement."</p>
                <p class="part--subtitle">Gail Rogers, Principal Commissioner Children's Services, 2018</p>
            </div>
            <div>
                <p class="part--text">"You successfully tested the concept and demonstrated that this technology could be us to deliver healthcare messages to students, their friends and family. You covered an impressive amount in terms of both technology and subject-content, especially within the short time frame available. It was clear that you and Mike had built a strong rapport with the students, who seemed confident, were enjoying the event and rising to its challengesincluding the unscheduled interviews. The structure of the broadcast had a good balance of interviews and background information alongside some music and their new jingle."</p>
                <p class="part--subtitle">Helen Wharam, New Devon CCG, 2017</p>
            </div>
            
            <div>
                <p class="part--text">"It was a great event and we had excellent feedback from the Young Carers and from those from the Children in Care Council. It was really beneficial for building their confidence, engaging new Young Carers, building friendships, promotion of the groups and inspiring the young people who took part. They loved getting their producer badges at the end of it."</p>
                <p class="part--subtitle">Teresa, Senior Manager Young Carers. 2015</p>
            </div>
            <div>
                <p class="part--text">"The radio broadcast made me grin from ear to ear and cry at the same time when I heard it - it had so much feeling and passion captured within the spoken words of our children, staff and parents on the first day in our new school. The cards and photos have been lovely but to hear people's passion in their voices is a remarkable thing."</p>
                <p class="part--subtitle">Hilary Priest, Headteacher. The Grove Totnes. 2017</p>
            </div>
        </div>
    </div>

    
</main>








<?php include("./atributes/footer.php"); ?>