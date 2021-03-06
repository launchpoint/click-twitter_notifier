<?

function get_twitter_template_for($nt)
{
  $et = TwitterTemplate::find_or_new_by( array(
    'conditions'=>array('notification_template_id = ?', $nt->id),
    'attributes'=>array(
      'body_text' => 'New message body',
      'notification_template_id'=>$nt->id
      )
    )
  );
  return $et;
}