<?

$title = "Twitter Wall Template";

$twitter_template = get_twitter_template_for($template);

if (is_postback() && array_key_exists('twitter_template', $params))
{
  $twitter_template->update_attributes($params['twitter_template']);
  $template->extract_variables($twitter_template, array('body_text'));
  
  if ($twitter_template->is_valid)
  {
    flash('Twitter template saved.');
  }
}

