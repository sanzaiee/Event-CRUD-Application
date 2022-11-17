            $(document).ready(function(){
                if ($("#event-form").length > 0) {
                    $("#event-form").validate({

                        rules: {
                            title: {
                                required: true,
                                maxlength: 50
                            },

                            description: {
                                required: true,
                            },

                            start_date: {
                                required: true,
                            },

                            end_date: {
                                required: true,
                            },

                        },
                        messages: {

                            title: {
                                required: "Please enter the title of event.",
                                maxlength: "Please enter more than 50 character.",
                            },
                             description: {
                                required: "Please enter description of event.",
                            },
                            start_date:{
                                required : "Please enter the start date of event.",
                            },
                            end_date:{
                                required : "Please enter the end date of event.",
                            }
                        },
                    })
                }
            });
