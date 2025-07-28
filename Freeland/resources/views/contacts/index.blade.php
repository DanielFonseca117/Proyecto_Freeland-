<x-app-layout>
  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Dashboard | Learn with Arshyan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4cc9f0;
            --warning: #f72585;
            --card-bg: rgba(255, 255, 255, 0.85);
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --shadow: 0 8px 32px rgba(31, 38, 135, 0.15);
            --transition: all 0.3s ease;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            color: var(--dark);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding: 20px;
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid var(--glass-border);
            box-shadow: var(--shadow);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            font-weight: bold;
        }

        .brand-text h1 {
            font-size: 28px;
            color: white;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .brand-text p {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
        }

        /* Search Area */
        .search-area {
            display: flex;
            gap: 15px;
        }

        .search-box {
            position: relative;
            width: 300px;
        }

        .search-box input {
            width: 100%;
            padding: 14px 20px;
            padding-left: 50px;
            border-radius: 50px;
            border: none;
            background: var(--card-bg);
            font-size: 16px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .search-box input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.3);
        }

        .search-box i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
            font-size: 20px;
        }

        .search-btn {
            background: linear-gradient(to right, var(--primary), var(--accent));
            color: white;
            border: none;
            padding: 0 30px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(67, 97, 238, 0.3);
        }

        /* Main Weather Dashboard */
        .dashboard {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            .dashboard {
                grid-template-columns: 1fr;
            }
        }

        .card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 30px;
            box-shadow: var(--shadow);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(31, 38, 135, 0.2);
        }

        .current-weather {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .location-info h2 {
            font-size: 28px;
            margin-bottom: 5px;
            color: var(--secondary);
        }

        .location-info p {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .weather-main {
            display: flex;
            align-items: center;
            gap: 20px;
            margin: 20px 0;
        }

        .temperature {
            font-size: 80px;
            font-weight: 700;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1;
        }

        .weather-icon {
            font-size: 70px;
            color: var(--accent);
        }

        .weather-description {
            font-size: 22px;
            font-weight: 600;
            color: var(--dark);
            text-transform: capitalize;
        }

        .weather-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px;
            background: rgba(67, 97, 238, 0.08);
            border-radius: 15px;
        }

        .detail-item i {
            font-size: 24px;
            color: var(--primary);
        }

        .detail-text h4 {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .detail-text p {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark);
        }

        /* Forecast Section */
        .forecast-container {
            margin-top: 30px;
        }

        .section-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: (--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .forecast-cards {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
        }

        @media (max-width: 992px) {
            .forecast-cards {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 576px) {
            .forecast-cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .forecast-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: var(--shadow);
            border: 1px solid var(--glass-border);
            transition: var(--transition);
        }

        .forecast-card:hover {
            transform: translateY(-5px);
        }

        .forecast-day {
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--secondary);
        }

        .forecast-icon {
            font-size: 36px;
            color: var(--accent);
            margin: 10px 0;
        }

        .forecast-temp {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 5px;
        }

        .max-temp {
            font-weight: 700;
            color: var(--primary);
        }

        .min-temp {
            color: #666;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            margin-top: 20px;
        }

        footer a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Unit Toggle */
        .unit-toggle {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px;
            border-radius: 50px;
            width: fit-content;
        }

        .unit-btn {
            padding: 8px 20px;
            border: none;
            border-radius: 50px;
            background: transparent;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
        }

        .unit-btn.active {
            background: white;
            color: var(--primary);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="brand">
                <div class="logo">LWA</div>
                <div class="brand-text">
                    <h1>Learn with Arshyan</h1>
                    <div class='code-block code-block-2' style='margin: 8px 0; clear: both;'>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2094722033678002"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-2094722033678002"
     data-ad-slot="2248279416"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
<p>Project 2: Weather Dashboard</p>
                </div>
            </div>
            <div class="search-area">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="search-input" placeholder="Search city...">
                </div>
                <button class="search-btn" id="search-btn">
                    <i class="fas fa-location-arrow"></i> Search
                </button>
            </div>
        </header>

        <main>
            <div class="dashboard">
                <div class="card current-weather">
                    <div class="location-info">
                        <h2 id="city-name">New York</h2>
                        <p id="current-date">Friday, July 18, 2025</p>
                    </div>

                    <div class="weather-main">
                        <div class="temperature" id="current-temp">24°</div>
                        <div>
                            <div class="weather-icon">
                                <i class="fas fa-sun"></i>
                            </div>
                            <div class="weather-description" id="weather-desc">Sunny</div>
                        </div>
                    </div>

                    <div class="weather-details">
                        <div class="detail-item">
                            <i class="fas fa-wind"></i>
                            <div class="detail-text">
                                <h4>Wind Speed</h4>
                                <p id="wind-speed">12 km/h</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-tint"></i>
                            <div class="detail-text">
                                <h4>Humidity</h4>
                                <p id="humidity">65%</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-compress"></i>
                            <div class="detail-text">
                                <h4>Pressure</h4>
                                <p id="pressure">1015 hPa</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-sun"></i>
                            <div class="detail-text">
                                <h4>UV Index</h4>
                                <p id="uv-index">5.2</p>
                            </div>
                        </div>
                    </div>

                    <div class="unit-toggle">
                        <button class="unit-btn active" id="celsius-btn">°C</button>
                        <button class="unit-btn" id="fahrenheit-btn">°F</button>
                    </div>
                </div>

                <div class="card">
                    <h3 class="section-title"><i class="fas fa-info-circle"></i> Weather Details</h3>
                    <div class="weather-details">
                        <div class="detail-item">
                            <i class="fas fa-temperature-high"></i>
                            <div class="detail-text">
                                <h4>Feels Like</h4>
                                <p id="feels-like">26°</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-eye"></i>
                            <div class="detail-text">
                                <h4>Visibility</h4>
                                <p id="visibility">10 km</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-cloud"></i>
                            <div class="detail-text">
                                <h4>Cloud Cover</h4>
                                <p id="cloud-cover">20%</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-sun"></i>
                            <div class="detail-text">
                                <h4>Sunrise</h4>
                                <p id="sunrise">5:42 AM</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-moon"></i>
                            <div class="detail-text">
                                <h4>Sunset</h4>
                                <p id="sunset">8:15 PM</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-clock"></i>
                            <div class="detail-text">
                                <h4>Last Update</h4>
                                <p id="last-update">10:30 AM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="forecast-container">
                <h3 class="section-title"><i class="fas fa-calendar-alt"></i> 5-Day Forecast</h3>
                <div class="forecast-cards" id="forecast-container">
                    <!-- Forecast cards will be generated by JavaScript -->
                </div>
            </div>
        </main>

        <footer>
            <p>Created by <a href="#">Learn with Arshyan</a> | Weather Dashboard Project | &copy; 2025</p>
        </footer>
    </div>

    <script>
        // DOM Elements
        const searchBtn = document.getElementById('search-btn');
        const searchInput = document.getElementById('search-input');
        const cityName = document.getElementById('city-name');
        const currentDate = document.getElementById('current-date');
        const currentTemp = document.getElementById('current-temp');
        const weatherDesc = document.getElementById('weather-desc');
        const windSpeed = document.getElementById('wind-speed');
        const humidity = document.getElementById('humidity');
        const pressure = document.getElementById('pressure');
        const uvIndex = document.getElementById('uv-index');
        const feelsLike = document.getElementById('feels-like');
        const visibility = document.getElementById('visibility');
        const cloudCover = document.getElementById('cloud-cover');
        const sunrise = document.getElementById('sunrise');
        const sunset = document.getElementById('sunset');
        const lastUpdate = document.getElementById('last-update');
        const forecastContainer = document.getElementById('forecast-container');
        const celsiusBtn = document.getElementById('celsius-btn');
        const fahrenheitBtn = document.getElementById('fahrenheit-btn');

        // Set current date
        const today = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        currentDate.textContent = today.toLocaleDateString('en-US', options);

        // Sample weather data (in a real app, this would come from an API)
        const weatherData = {
            city: "New York",
            temperature: 24,
            description: "Sunny",
            wind: 12,
            humidity: 65,
            pressure: 1015,
            uv: 5.2,
            feelsLike: 26,
            visibility: 10,
            cloudCover: 20,
            sunrise: "5:42 AM",
            sunset: "8:15 PM",
            lastUpdate: "10:30 AM",
            forecast: [
                { day: "Sat", icon: "cloud-sun", max: 26, min: 18 },
                { day: "Sun", icon: "cloud-showers-heavy", max: 22, min: 16 },
                { day: "Mon", icon: "sun", max: 28, min: 20 },
                { day: "Tue", icon: "cloud-sun", max: 25, min: 17 },
                { day: "Wed", icon: "bolt", max: 23, min: 15 }
            ]
        };

        // Function to update weather display
        function updateWeatherDisplay(data) {
            cityName.textContent = data.city;
            currentTemp.textContent = `${data.temperature}°`;
            weatherDesc.textContent = data.description;
            windSpeed.textContent = `${data.wind} km/h`;
            humidity.textContent = `${data.humidity}%`;
            pressure.textContent = `${data.pressure} hPa`;
            uvIndex.textContent = data.uv;
            feelsLike.textContent = `${data.feelsLike}°`;
            visibility.textContent = `${data.visibility} km`;
            cloudCover.textContent = `${data.cloudCover}%`;
            sunrise.textContent = data.sunrise;
            sunset.textContent = data.sunset;
            lastUpdate.textContent = data.lastUpdate;

            // Update forecast
            forecastContainer.innerHTML = '';
            data.forecast.forEach(day => {
                const forecastCard = document.createElement('div');
                forecastCard.className = 'forecast-card';
                forecastCard.innerHTML = `
                    <div class="forecast-day">${day.day}</div>
                    <div class="forecast-icon">
                        <i class="fas fa-${day.icon}"></i>
                    </div>
                    <div class="forecast-temp">
                        <span class="max-temp">${day.max}°</span> /
                        <span class="min-temp">${day.min}°</span>
                    </div>
                `;
                forecastContainer.appendChild(forecastCard);
            });
        }

        // Initialize with sample data
        updateWeatherDisplay(weatherData);

        // Search functionality
        searchBtn.addEventListener('click', () => {
            const city = searchInput.value.trim();
            if (city) {
                // In a real app, you would fetch data from API here
                const newData = {...weatherData, city};
                updateWeatherDisplay(newData);
                searchInput.value = '';
            }
        });

        // Enter key for search
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                searchBtn.click();
            }
        });

        // Unit toggle functionality
        celsiusBtn.addEventListener('click', () => {
            celsiusBtn.classList.add('active');
            fahrenheitBtn.classList.remove('active');
            // Convert temperatures to Celsius
            const newData = {
                ...weatherData,
                temperature: 24,
                feelsLike: 26,
                forecast: weatherData.forecast.map(day => ({
                    ...day,
                    max: day.max,
                    min: day.min
                }))
            };
            updateWeatherDisplay(newData);
        });

        fahrenheitBtn.addEventListener('click', () => {
            fahrenheitBtn.classList.add('active');
            celsiusBtn.classList.remove('active');
            // Convert temperatures to Fahrenheit
            const newData = {
                ...weatherData,
                temperature: Math.round(24 * 9/5 + 32),
                feelsLike: Math.round(26 * 9/5 + 32),
                forecast: weatherData.forecast.map(day => ({
                    ...day,
                    max: Math.round(day.max * 9/5 + 32),
                    min: Math.round(day.min * 9/5 + 32)
                }))
            };
            updateWeatherDisplay(newData);
        });

        // Initialize with random cities for demo
        const demoCities = ['London', 'Paris', 'Tokyo', 'Sydney', 'Dubai'];
        let currentIndex = 0;

        // Change city every 10 seconds for demo purposes
        setInterval(() => {
            currentIndex = (currentIndex + 1) % demoCities.length;
            const newData = {...weatherData, city: demoCities[currentIndex]};
            updateWeatherDisplay(newData);
        }, 10000);
    </script>
</body>
</x-app-layout>