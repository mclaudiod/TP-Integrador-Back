<?php

    namespace Controllers;

    use Model\Ticket;
    use MVC\Router;

    class IndexController {
        public static function index(Router $router) {
            if($_SERVER["REQUEST_METHOD"] === "POST") {
                if(isset($_POST["buy-ticket"])) {
                    $ticket = new Ticket($_POST);
                    $result = $ticket->save();

                    if($result) {
                        $gotTicket = true;
                    } else {
                        $ticketError = true;
                    };
                } elseif(isset($_POST["send-message"])) {
                    $messageSent = true;
                };
            };

            $router->render("index", [
                "title" => "Index",
                "gotTicket" => $gotTicket ?? false,
                "ticketError" => $ticketError ?? false,
                "messageSent" => $messageSent ?? false
            ]);
        }

        public static function tickets(Router $router) {
            $tickets = Ticket::all("ASC");
            
            $router->render("tickets", [
                "title" => "Tickets",
                "tickets" => $tickets
            ]);
        }

        public static function edit(Router $router) {
            $id = $_GET["id"];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if(!$id) {
                header("Location: /tickets");
            };

            $ticket = Ticket::find($id);

            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $ticket->synchronize($_POST);
                $result = $ticket->save();

                if($result) {
                    header("Location: /tickets");
                };
            };
            
            $router->render("edit", [
                "title" => "Editar Ticket",
                "ticket" => $ticket
            ]);
        }

        public static function delete() {
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = $_POST["id"];
                $id = filter_var($id, FILTER_VALIDATE_INT);

                if(!$id) {
                    header("Location: /tickets");
                }
    
                $ticket = Ticket::find($id);
    
                if(!isset($ticket)) {
                    header("Location: /tickets");
                }

                $result = $ticket->delete();

                if($result) {
                    header("Location: /tickets");
                }
            }
        }
    }