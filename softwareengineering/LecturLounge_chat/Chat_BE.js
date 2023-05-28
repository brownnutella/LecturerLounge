// Get the elements from the HTML document
var chatClose = document.querySelector(".chat-close");
var chatInput = document.querySelector(".chat-input");
var chatSend = document.querySelector(".chat-send");
var chatBody = document.querySelector(".chat-body");

// Add an event listener to the chat close button
chatClose.addEventListener("click", function() {
  // Close the chat window
  window.close();
});

// Add an event listener to the chat send button
chatSend.addEventListener("click", function() {
  // Get the user input from the chat input
  var userInput = chatInput.value;
  // Check if the user input is not empty
  if (userInput) {
    // Create a new chat message element
    var userMessage = document.createElement("div");
    userMessage.className = "chat-message";
    userMessage.innerHTML = "<span class='chat-sender'>You:</span><span class='chat-content'>" + userInput + "</span>";
    // Append the user message to the chat body
    chatBody.appendChild(userMessage);
    // Scroll to the bottom of the chat body
    chatBody.scrollTop = chatBody.scrollHeight;
    // Clear the chat input
    chatInput.value = "";
    // Call the function to generate a response from Bing
    generateBingResponse(userInput);
  }
});

// Define a function to generate a response from Bing
function generateBingResponse(userInput) {
  // Create a new chat message element
  var bingMessage = document.createElement("div");
  bingMessage.className = "chat-message";
  bingMessage.innerHTML = "<span class='chat-sender'>Bing:</span><span class='chat-content'>...</span>";
  // Append the Bing message to the chat body
  chatBody.appendChild(bingMessage);
  // Scroll to the bottom of the chat body
  chatBody.scrollTop = chatBody.scrollHeight;
  // Use a timeout to simulate a delay in the response
  setTimeout(function() {
    // Generate a response based on the user input
    var bingResponse = "Sorry, I don't understand what you mean.";
    // Replace the Bing message content with the response
    bingMessage.querySelector(".chat-content").textContent = bingResponse;
  }, 2000);
}
