<!DOCTYPE html>
<html>
  <head>
    <title>A[4] Tech Solutions</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="icon" href="a4Logo_32x32.png" type="image/x-icon">
  </head>
  <body>
    <header>
        <div class="topsection">
          <h1>A[4] Tech Solutions</h1>
          <h2>Creating opportunities from challenges.<h2>
          <?php 
            date_default_timezone_set('US/Eastern');
            echo date("F j, Y, g:i a");
            ?>
          </h1>
		   <img id="logo" src="a4Logo_200x200.jpg" alt="A4 Logo">
        </div>

        <div class="navbar">
            <div class="menubtn">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            </div>

            <div class="dropdown">
              <button class="dropbtn">Charts
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="temp_dark.php">Temperature</a>
                <a href="humidity_dark.php">Humidity</a>
                <a href="pressure_dark.php">Pressure</a>
                <a href="precip_dark.php">Precipitation</a>
                <a href="wind_dark.php">Winds</a>
              </div>

            </div>
      </header>
      <div class="mainsectionAbout">
          <div class="aboutsection">
              <ul class="teambio">
                  <li>
                        <h2 class="lead-in">Project</h2>
                        <p class="maintag">Weather Station</p>
                        <p>The weather station at this IP address is a senior project for students in the Computer Science Department, College of Engineering,
                        at the University of South Florida. We used many of the skills acquired while undergraduates but the full completion of the project also required tapping into resources and research outside of our experience. The weather station is based on a Raspberry Pi microcontroller and is located just north of Tampa, FL. It pushes its sensor data to a cloud server and database and we use server side scripts to render the data contained in the charts. It has been fun, challenging, and we hope you enjoy our project. Thanks for stopping by!
                        </p>
                    </li>
                    <li>
                        <h2 class="lead-in">Jordan Allen</h2>
                        <p class="maintag">Hardware</p>
                        <p>I'm a proud third generation United States Marine Corps (USMC) veteran, who is graduating in May 2019 with my B.S. in Cybersecurity.
                        Computers and technology have always been an interest of mine, and I'm excited to begin the next chapter of my life incorporating the skills I've learned. My current plans are to enter the technology industry for a few years before furthering my education towards my Masters of Business Administration (MBA) degree. Family means everything to me, and I work ever day trying to better myself, so I can provide a better life and set a good example for my best friend, my five-year-old son. Some of my hobbies include watching tv/movies, anything sports related, and playing video games.</p>
                    </li>
                    <li>
                        
						<h2 class="lead-in">Tyrone Boyd</h2>
                        <p class="maintag">Website</p>
                        <p>I'm graduating May 2019 with a B.S. in Information Technology.
                        I aspire to become a Web Developer and I know that I will be able to use
                        my knowledge to reach that goal. One thing about graduating is that it's like beginning again. My lifestyle will change and that
                        is something that I'm looking forward to. The idea that I'm headed into an industry
                        where you constantly have to learn is exciting for me and I can't wait to get started. 
                        </p>
                    </li>
                    <li>
                        <h2 class="lead-in">Steven Chov</h2>
                        <p class="maintag">Website/APIs</p>
                        <p>I’m a senior graduating this May 2019 with a B.S. in Information Technology. As a kid and growing up, I’ve always been
						interested in technology and was influenced by my uncles who have careers that involve either computers or technology. That has stayed with me when I decided my major after starting college. I plan to start my career in IT after graduating. My hobbies include fishing, reading books, playing video games, and cooking.</p>
                    </li>
                    <li>
                        <h2 class="lead-in">Douglas Kapocsi</h2>
                        <p class="maintag">Backend/Coordinator/Website</p>
                        <p>I will be graduating in August 2019 with a B.S. in Information Technology. I am looking forward to applying my skills to become a valued member of a technology team here in Florida. Eventually, I seek to continue my education and eventually help train the next generation of  information and computer scientists and engineers. My interests include cloud computing, cybersecurity, project management. I currently live in Central Florida with my wife, three children, four dogs, two turtles and twenty-seven computers including an ancient but still operating Commodore 64.</p>
                    </li>
              </ul>
          </div>
      </div>
      
  </body>
</html>
