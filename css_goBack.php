* {
margin: 0;
padding: 0;
font-family: "Poppins", sans-serif;
scroll-behavior: smooth;
}

body {
background-size: cover;
background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
url(img/News_background.jpg);
}

.wrapper {
width: 650px;
height: 220px;
background: #a4f7ef;
color: black;
padding: 15px;
font-size: 28px;
border: none;
text-transform: uppercase;
border-radius: 10px;
margin: 0 auto;
margin-top: 200px;
display: flex;
justify-content: center;
flex-direction: column;
}

p {
text-align: center;
font-weight: 600;
}

.btn {
padding-top: 30px;
text-align: center;
margin-left: 80px;
margin-right: 80px;
}

button:hover {
background-color: black;
color: white;
transition: all 1s;
}

button {
text-decoration: none;
color: black;
border: 1px solid black;
padding: 12px 34px;
font-size: 13px;
background: transparent;
cursor: pointer;
text-transform: uppercase;
}