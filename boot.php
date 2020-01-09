<?php
// Löschen-Button ausblenden
if (rex::isBackend() && rex::getUser()->hasPerm('mf_no_delete[]') && !rex::getUser()->isAdmin() ) {
    rex_extension::register('OUTPUT_FILTER', function(rex_extension_point $ep) {	
		$ep->setSubject(preg_replace('#(\<a.*href).*(category_delete).*(\<\/a\>)#i', '', $ep->getSubject()));
		$ep->setSubject(preg_replace('#(\<a.*href).*(article_delete).*(\<\/a\>)#i', '', $ep->getSubject()));
		// DE
		$ep->setSubject(str_replace('<span class="text-muted"><i class="rex-icon rex-icon-delete"></i> löschen</span>', '<span class="text-muted">'.rex_i18n::msg('startarticle').'</span>', $ep->getSubject()));
		// EN
		$ep->setSubject(str_replace('<span class="text-muted"><i class="rex-icon rex-icon-delete"></i> delete</span>', '<span class="text-muted">'.rex_i18n::msg('startarticle').'</span>', $ep->getSubject()));
		// ES
		$ep->setSubject(str_replace('<span class="text-muted"><i class="rex-icon rex-icon-delete"></i> Borrar</span>', '<span class="text-muted">'.rex_i18n::msg('startarticle').'</span>', $ep->getSubject())); 
		// IT
		$ep->setSubject(str_replace('<span class="text-muted"><i class="rex-icon rex-icon-delete"></i> Cancella</span>', '<span class="text-muted">'.rex_i18n::msg('startarticle').'</span>', $ep->getSubject()));
		// NL
		$ep->setSubject(str_replace('<span class="text-muted"><i class="rex-icon rex-icon-delete"></i> verwijderen</span>', '<span class="text-muted">'.rex_i18n::msg('startarticle').'</span>', $ep->getSubject()));
		// PT
		$ep->setSubject(str_replace('<span class="text-muted"><i class="rex-icon rex-icon-delete"></i> deletar</span>', '<span class="text-muted">'.rex_i18n::msg('startarticle').'</span>', $ep->getSubject()));
		// SV radera
		$ep->setSubject(str_replace('<span class="text-muted"><i class="rex-icon rex-icon-delete"></i> radera</span>', '<span class="text-muted">'.rex_i18n::msg('startarticle').'</span>', $ep->getSubject()));
	  });
}
?>