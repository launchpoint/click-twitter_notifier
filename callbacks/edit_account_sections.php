<?

if (!$current_user->twitter_info)
{
  $info = TwitterInfo::new_model_instance();
} else {
  $info = $current_user->twitter_info;
}

if (is_postback() && p('twitter_info'))
{
  $info->update_attributes($params['twitter_info']);
  $current_user->twitter_info_id = $info->id;
  $current_user->save();
  if ($info->is_valid)
  {
    flash("Twitter account information saved.");
  }
}

$title="Twitter";