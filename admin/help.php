<div class="content">
<?php require './includes/nav.php' ?>
    <div class="bodyRight">
    <form action='' method='POST' autocomplete = 'off' enctype='multipart/form-data'>
        <h4 class="title">BentilZone Help Center</h4>
    <div class="contentform">
    <div class="text-center p-1 mb-2">You need any help? kindly visit our <a href = ""><i class="text-success">Documentation</i></a> page for your solution Or<br clear = "all">
        <span> email the admin in the form below</span>
    </div>
        <div class="form-group">
            <p>Email<span>*</span></p>
            <span class="icon-case"><i class="fa fa-th-list"></i></span>
                <input type="email" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné." placeholder = "Enter youe email ID"/>
            <div class="validation"></div>
        </div>   
        <div class="form-group">
            <p>Subject<span>*</span></p>
            <span class="icon-case"><i class="fa fa-th-list"></i></span>
                <input type="email" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné." placeholder = "Enter subject"/>
            <div class="validation"></div>
        </div>   
        <div class="form-group">
            <p>Message<span>*</span></p>
            <span class="icon-case"><i class="fa fa-th-list"></i></span>
            <textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné." placeholder = "Enter youe message here..."></textarea>
            <div class="validation"></div>
        </div>   
    </div>
    <button type="submit" class="bouton-contact">Send</button>
    
    </form> 
    </div>
</div>