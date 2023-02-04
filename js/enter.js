/* this file contains one event listener for new_deal.php.
    the JavaScript here acts as a bridge between the HTML form
    in new_deal.php and the PHP script in enter.php -
    which writes the new record into the database.
*/

// this is the form in enter_new_record.php -
const dealform = document.querySelector('#dealform');

// this is a DIV in enter_new_record.php -
const response_content = document.querySelector('#response');

// this DIV contains the form in enter_new_record.php -
const deals_form = document.querySelector('#deals');
// show the DIV if it is hidden
deals_form.style.display = 'block';

// event handler
dealform.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(dealform);
    // FETCH
    fetch('enter.php', {
        method: "POST",
        body: formData,
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        deals_form.style.display = 'none';
        response_content.innerHTML =
        "<p class='announce'>" + data + "</p>" +
        "<p class='mid'><a href='new_deal.php'>Return to the form</a></p>";
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of FETCH
    return false;
}; // end dealform.onsubmit
