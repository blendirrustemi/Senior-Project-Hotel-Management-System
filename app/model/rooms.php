<?php
    
    class rooms
    {
        // table fields
        public $room_type_id;
        public $room_type_name;
        public $room_cost;
        public $room_type_description;
        public $smoke_friendly;
        public $pet_friendly;
        // message fields
        public $room_type_id_msg;
        public $room_type_name_msg;
        public $room_cost_msg;
        public $room_type_description_msg;
        public $smoke_friendly_msg;
        public $pet_friendly_msg;
        // constructor set default value
        function __construct()
        {
            $room_type_id=$room_type_name=$room_cost=$room_type_description=$smoke_friendly=$pet_friendly="";
            $room_type_id_msg=$room_type_name_msg=$room_cost_msg=$room_type_description_msg=$smoke_friendly_msg=$pet_friendly_msg="";
        }
    }

?>
