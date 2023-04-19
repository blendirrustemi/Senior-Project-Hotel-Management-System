/**
 * Javascript file that handles requests sent to it's APIs
 */

// Setup variables
const app = require('express')();
const mysql = require('mysql');
const dbname = "hotel_management_system";
const dbhost = "localhost";
const dbuser = "root";
const dbpass = "";

// Connection to database
const conn = mysql.createConnection({
    host: dbhost,
    database: dbname,
    user: dbuser,
    password: dbpass
});

// Handling External requests

// Get all bookings
app.get('/YinnService/External/bookings', function(req, res) {
    var result;
    result = "{\"error\":\"Result is undefined\"}";
    var sql = "SELECT * FROM bookings";
    conn.query(sql, function(err, myRes) {
        if (err) result = "{\"error\":\"Failed to get all bookings\"}";
        res.send(myRes);
    });
});

// Get one booking
app.get('/YinnService/External/booking', function(req, res) {
    var result;
    BookingID = req.query.BookingID;
    result = "{\"error\":\"Result is undefined\"}";
    var sql = "SELECT * FROM bookings WHERE BookingID='" + BookingID + "'";
    conn.query(sql, function(err, myRes) {
        if (err) result = "{\"error\":\"No booking exists under the id: " + BookingID + ".\"}";
        res.send(myRes);
    });
});

// Insert new booking
app.post('/YinnService/External/booking', function(req, res) {
    var result;
    BookingID = req.query.BookingID;
    CustomerID = req.query.CustomerID;
    RoomID = req.query.RoomID;
    CheckInDate = req.query.CheckInDate;
    CheckOutDate = req.query.CheckOutDate;
    Adults = req.query.Adults;
    Children = req.query.Children;
    Requests = req.query.Requests;
    NightsToStay = req.query.NightsToStay;
    TotalPrice = req.query.TotalPrice;

    result = "{\"error\":\"Result is undefined\"}";
    var sql = "INSERT INTO `bookings` VALUES (" + BookingID + ", " + CustomerID + ", " + RoomID + ", '" + CheckInDate + "', '" + CheckOutDate + "', " + Adults + ", " + Children + ", '" + Requests + "', " + NightsToStay + ", " + TotalPrice + ")";

    conn.query(sql, function(err) {
        if (err) result = "{\"error\":\"Booking could not be inserted\"}";
        result = "{\"success\":\"Booking Inserted\"}";
        res.send(result);
    });
});

// Update existing booking
app.put('/YinnService/External/booking', function(req, res) {
    var result;
    NewBookingID = req.query.NewBookingID
    BookingID = req.query.BookingID;
    CustomerID = req.query.CustomerID;
    RoomID = req.query.RoomID;
    CheckInDate = req.query.CheckInDate;
    CheckOutDate = req.query.CheckOutDate;
    Adults = req.query.Adults;
    Children = req.query.Children;
    Requests = req.query.Requests;
    NightsToStay = req.query.NightsToStay;
    TotalPrice = req.query.TotalPrice;

    result = "{\"error\":\"Result is undefined\"}";
    var sql = "UPDATE `bookings` SET `BookingID` = " + BookingID + ", `CustomerID` = " + CustomerID + ", `RoomID` = " + RoomID + ", `CheckInDate` = " + CheckInDate + ", ``CheckOutDate` = '" + CheckOutDate + "', `Adults` = " + Adults + ", `Children` = " + Children + ", `Requests` = '" + Requests + "', `NightsToStay` = " + NightsToStay + ", `TotalPrice` = " + TotalPrice + " WHERE BookingID = " + BookingID;

    conn.query(sql, function(err) {
        if (err) result = "{\"error\":\"Departments could not be updated\"}";
        result = "{\"success\":\"Booking updated\"}";
        res.send(result);
    });
});

// Delete existing booking
app.delete('/YinnService/External/booking', function(req, res) {
    var result;
    BookingID = req.query.BookingID;

    result = "{\"error\":\"Result is undefined\"}";
    var sql = "DELETE FROM bookings WHERE BookingID=" + BookingID;
    conn.query(sql, function(err) {
        if (err) result = "{\"error\":\"Booking with an id of: " + BookingID + " could not be deleted\"}";
        result = "{\"success\":\"Booking deleted\"}";
        res.send(result);
    });
});

// End of External requests

// Handling Internal requests

// Get all bookings
app.get('/YinnService/Internal/bookings', function(req, res) {

});

// Get one booking
app.get('/YinnService/Internal/booking', function(req, res) {

});

// Insert new booking
app.post('/YinnService/Internal/booking', function(req, res) {

});

// Update existing booking
app.put('/YinnService/Internal/booking', function(req, res) {

});

// Delete existing booking
app.delete('/YinnService/Internal/booking', function(req, res) {

});

// End of Internal requests

// Start the app on port 8080 and connect to db
app.listen(8080, function(){
    console.log('Listening on port 8080');
    conn.connect(function(err) {
        if (err) throw err;
        console.log('Database Connection Successful!');
    })
});
