const express = require('express'); // Paket Express importieren

// App initialisieren
const PORT = 4000;

const app = express();

app.get('/', (req, res) => res.send('<h1>Hello From Docker Hub!</h1>'));

app.listen(PORT, () => {
console.log(`app is up and running on port: ${PORT}`);
});


