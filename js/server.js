const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

app.use(bodyParser.json());

// Endpoint to handle saving reviews
app.post('/save-review', (req, res) => {
    const review = req.body.review;
    // Here you would typically save the review to a database
    console.log('Received review:', review);
    // Send back a response to the client
    res.json({ review: review }); // Assuming sending back the saved review for display
});

app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
