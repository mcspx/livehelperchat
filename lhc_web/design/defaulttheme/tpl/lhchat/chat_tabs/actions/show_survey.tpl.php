<a class="material-icons mr-0" onclick="lhc.revealModal({'url':WWW_DIR_JAVASCRIPT +'survey/choosesurvey/<?php echo $chat->id?>'})" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Redirect user to survey')?>">speaker_notes</a>

<?php /*
<a class="material-icons mr-0" target="_blank" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Redirect user to survey')?>" onclick="return lhinst.makeAbstractRequest('<?php echo $chat->id?>', $(this))" href="<?php echo erLhcoreClassDesign::baseurl('chat/setsubstatus')?>/<?php echo $chat->id?>/5" >speaker_notes</a>
*/ ?>