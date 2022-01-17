$(document).ready(function(){
    // Products form validation
    // confirm('found');
    $('.products').bootstrapValidator({
        feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            p_name: {
                validators: {
                    stringLength: {
                        min: 5,
                        message: 'Product name sould be atleast 5 characters'
                    },
                    string:{
                        message: 'First cannot contain numbers'
                    },
                    notEmpty: {
                        message: 'Please Enter product name'
                    }
                }
            },
            price: {
                validators: {
                    numeric: {
                        message: 'Product Price must be a number'    
                    },
                    notEmpty: {
                        message: 'Please Enter product price'
                    }
                }
            },
            category: {
                    notEmpty: {
                        message: 'Please select Category'
                    }
            },
            sub_category: {
                    notEmpty: {
                        message: 'Please select Sub Category'
                    }
                }
            },
            f1: {
                validators: {
                    stringLength: {
                        min: 5,
                        message: 'Product Feature must be atleast 5 Characters'
                    },
                    stringLength: {
                        max: 50,
                        message: 'Product Feature must be less than 50 Characters'
                    },
                    notEmpty: {
                        message: 'Enter Product Feature One'
                    }
                }
            },
            f2: {
                validators: {
                    stringLength: {
                        min: 5,
                        message: 'Product Feature must be atleast 5 Characters'
                    },
                    stringLength: {
                        max: 50,
                        message: 'Product Feature must be less than 50 Characters'
                    },
                    notEmpty: {
                        message: 'Enter Product Feature Two'
                    }
                }
            },
            f3: {
                validators: {
                    stringLength: {
                        min: 5,
                        message: 'Product Feature must be atleast 5 Characters'
                    },
                    stringLength: {
                        max: 50,
                        message: 'Product Feature must be less than 50 Characters'
                    },
                    notEmpty: {
                        message: 'Enter Product Feature Three'
                    }
                }
            },
            f4: {
                validators: {
                    stringLength: {
                        min: 5,
                        message: 'Product Feature must be atleast 5 Characters'
                    },
                    stringLength: {
                        max: 50,
                        message: 'Product Feature must be less than 50 Characters'
                    },
                    notEmpty: {
                        message: 'Enter Product Feature Four'
                    }
                }
            },
            discount: {
                validators: {
                    numeric: {
                        message: 'Discount must be a number'    
                    },
                    // notEmpty: {
                    //     message: 'Please Enter your phone number'
                    // }
                }
            },
            model: {
                validators: {
                    stringLength: {
                        min: 10,
                        max: 100,
                        message:'model must be at least 10 characters and not more than 100'
                    },
                    notEmpty: {
                        message: 'Please Enter Product Model'
                    }
                }
            },
            keyword: {
                validators: {
                    stringLength: {
                        min: 10,
                        max: 100,
                        message:'Keyword must be at least 5 characters and not more than 100'
                    },
                    notEmpty: {
                        message: 'Please Enter Product Keywords'
                    }
                }
            },
            warranty: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter Product Warranty'
                    }
                }
            },
            img1: {
                notEmpty: {
                    message: 'Please Choose Product Image 1'
                }
            },
            img2: {
                notEmpty: {
                    message: 'Please Choose Product Image 2'
                }
            },
            img3: {
                notEmpty: {
                    message: 'Please Choose Product Image 3'
                }
            }
    });
})