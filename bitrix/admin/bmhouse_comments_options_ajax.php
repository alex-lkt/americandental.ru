<?
require( $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php' );


$action = htmlspecialchars( $_POST['ACTION'] );
$commentId = htmlspecialchars( $_POST['ID'] );
$text = htmlspecialchars( $_POST['TEXT'] );


if ( $action && $commentId && CModule::IncludeModule( 'bmhouse.comments' ) )
{
	switch ( $action )
	{
		case 'ACTIVATE':
			BMHcomments::activateComment( $commentId );
			break;
			
		case 'DELETE':
			BMHcomments::deleteComment( $commentId );
			break;
			
		case 'ANSWER':
			BMHcomments::addAnswer( $commentId, $text );
			break;
	}
}
?>