<?

if($to->twitter_info_id)
{
  $t = get_twitter_template_for($template);
  if ($template->is_system || ($template->is_public && $template->is_enabled_for($to, 'twitter'))) {
    $twi_user = new Twitter($to->twitter_info->login, $to->twitter_info->password);
    $twi_user->updateStatus($template->apply_vars($t->body_text));
  }
}
