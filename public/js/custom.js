//#############################################################
//                                                            #
//                      QUILL COMMENTAIRE                     #
//                                                            #
//#############################################################

// Class definition
let QuillComment = (function() {
    // Private functions
    let commentaire = function() {
        let quill = new Quill("#commentaire", {
            modules: {
                toolbar: [
                    [
                        {
                            header: [1, 2, false]
                        }
                    ],
                    ["bold", "italic", "underline"],
                    ["image", "code-block"]
                ]
            },
            placeholder: "Saisissez votre commentaire ici...",
            theme: "snow" // or 'bubble'
        });
    };

    return {
        // public functions
        init: function() {
            commentaire();
        }
    };
})();

jQuery(document).ready(function() {
    QuillComment.init();
});

//#############################################################
//                                                            #
//                   DROPZONE FILE UPLOAD                     #
//                                                            #
//#############################################################

// Class definition
var KTDropzone = (function() {
    // Private functions
    let fileUpload = function() {
        // multiple file upload
        $("#kt_dropzone").dropzone({
            url: "/mesgs/fileUpload", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            uploadMultiple: true,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            dictRemoveFile: "Supprimer",
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
    };

    return {
        // public functions
        init: function() {
            fileUpload();
        }
    };
})();

KTUtil.ready(function() {
    KTDropzone.init();
});

//#############################################################
//                                                            #
//                         TOOLTIP                            #
//                                                            #
//#############################################################

$(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
