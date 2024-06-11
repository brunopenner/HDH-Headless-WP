<?php

$formId = get_field('form_id');
?>

<div>
    <h4>Formspree form</h4>
    <div>
        Check your form submissions <a href="https://formspree.io/forms/<?php echo $formId; ?>/submissions"
            target="_blank">here</a>
    </div>
</div>