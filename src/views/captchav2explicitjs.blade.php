@if(!empty($options))
<script type="text/javascript">
  var RecaptchaOptions = {
  	sitekey: "{{ $public_key }}",
  	theme: "{{ $options['theme'] }}"
  }
</script>
@endif

<script src="https://www.google.com/recaptcha/api.js?render=explicit{{ (isset($lang) ? '&hl='.$lang : '') }}" async defer></script>