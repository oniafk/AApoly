<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            body {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #5c6b73;
            }
            .container {
                display: grid;
                grid-template-rows: auto 1fr;
                gap: 20px;
                width: 50%;
                background-color: #9db4c0;
                padding: 20px;
                border-radius: 10px;
            }
            section {
                display: flex;
                flex-direction: column;
                background-color: #9db4c0;
                padding: 15px;
                border-radius: 10px;
            }
            h2 {
                margin: 0;
                font-size: 12px;
                margin-bottom:4px;
                margin-top: 4px;
            }

            
            ul {
                display: flex;
                flex-direction: column;
                list-style: none;
                padding: 0;
            }

            .message {
                display: flex;
                flex-direction: column;
                gap: 4px;
                margin: 4px 0;
                padding: 4px 8px;

                > span {
                    width: 36px;
                    height: 36px;
                    background: #eee;
                    font-size: 12px;
                    font-family: 500;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius: 999999999px; /* big number to make it round, never big enough */
                }

                > p {
                    border-radius: 4px;
                    padding: 4px 8px;
                    margin-top: 8px;
                }

                &.user {
                    align-self: flex-end;
                    align-items: flex-end;
                    span,
                    p {
                        background: rgb(204, 248, 210);
                    }
                }
                &.sender {
                    align-self: self-start;
                    span,
                    p {
                        background: rgb(236, 236, 236);
                    }
                }
            }

            .messages-container {
                border: 1px solid #ccc;
                padding: 10px;
                height: 200px;
                overflow-y: hide;
                background-color: #edf8f8;
                border-radius: 5px;
            }

            .input-message-container {
                border: 1px solid #ccc;
                margin-top: 10px;        
                height: 30px;
                overflow-y: hide;
                background-color: #edf8f8;
                border-radius: 5px;
            }
            .input-message-container input {
                width: 100%;
                height: 100%;
                border: none;
                background-color: #edf8f8;
                font-size: 16px;
                overflow: auto;
            }
            
            .send-button {
                margin-top: 10px;
                padding: 10px 20px;
                background-color: #648293;
                color: white;
                border: none;
                cursor: pointer;
                border-radius: 5px;
            }
            .send-button-container {
                display: flex;
                justify-content: right;
            }
            .send-button:hover {
                background-color: #4c6370;
            }

            .hidden {
                display: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <section>
                <div>
                    <h2>Create your user</h2>
                    <div class="input-message-container">
                        <input type="text" placeholder="Create your user" />
                    </div>
                    <div class="send-button-container">
                        <button class="send-button" onclick="showMessages()">Login</button>
                    </div>
                </div>
            </section>
            <section id="messages-section" class="hidden">
                <div>
                    <h2>Messages</h2>
                    <div class="messages-container">
                        <ul id="messages"></ul>
                    </div>
                </div>
                <div>
                    <div>
                        <h2>Message to send</h2>
                        <div class="input-message-container">
                            <input type="text" />
                        </div>
                    </div>
                    <div class="send-button-container">
                        <button class="send-button">Send</button>
                    </div>
                </div>
            </section>
        </div>

        <template id="message-template">
            <li class="message">
                <span></span>
                <p></p>
            </li>
        </template>

        <script>
            function showMessages() {
                document.getElementById('messages-section').classList.remove('hidden');
            }
        </script>

        <?php
            // Add your PHP logic for handling messages here in the future.
            // This is where you could handle form submissions, saving data to a database, etc.
        ?>
        
    </body>
</html>
