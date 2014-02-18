<?php
// Messages: Rewrite to use Bootstrap classes
function drupal7_starter_status_messages($variables) {
	$display = $variables['display'];
	$output = '';

	$status_heading = array(
		'status' => t('Status message'),
		'error' => t('Error message'),
		'warning' => t('Warning message'),
	);
	foreach (drupal_get_messages($display) as $type => $messages) {
		switch($type){
			case 'status':
				$bootstrap_warning = 'alert alert-info';
			break;
			case 'error':
				$bootstrap_warning = 'alert alert-error';
			break;
			case 'warning':
			$bootstrap_warning = 'alert';
			break;
		}
		$output .= "<div class=\"$bootstrap_warning\">\n";
		if (!empty($status_heading[$type])) {
			$output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
		}
		if (count($messages) > 1) {
			$output .= " <ul>\n";
			foreach ($messages as $message) {
				$output .= ' <li>' . $message . "</li>\n";
			}
			$output .= " </ul>\n";
		}
		else {
			$output .= $messages[0];
		}
		$output .= "</div>\n";
	}
	return $output;
}

// Tabs: Rewrite to use Boostrap classes
function drupal7_starter_menu_local_tasks(&$variables) {
	$output = '';

	if (!empty($variables['primary'])) {
		$variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
		$variables['primary']['#prefix'] = '<ul class="nav nav-tabs">';
		$variables['primary']['#suffix'] = '</ul>';
		$output .= drupal_render($variables['primary']);
	}

	if (!empty($variables['secondary'])) {
		$variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
		$variables['secondary']['#prefix'] = '<ul class="nav nav-pills">';
		$variables['secondary']['#suffix'] = '</ul>';
		$output .= drupal_render($variables['secondary']);
	}
	return $output;
}

// Buttons: Rewrite to include 'btn' class
function drupal7_starter_preprocess_button(&$vars) {
	$vars['element']['#attributes']['class'][] = 'btn';
}

// Forms: customize labels and add classes
function drupal7_starter_form_alter(&$form, &$form_state, $form_id) {
	// Search Form
	if ($form['#id'] == 'search-block-form') {
		$form['search_block_form']['#attributes']['class'][] = 'input-block-level';
	}

	// Search Form Results Page
	// if ($form['#id'] == 'search-form') {
	//   $form['keys']['#attributes']['class'][] = 'input-block-level';
	// }

	// User Login
	if ($form['#id'] == 'user-login') {
		$form['name']['#attributes']['class'][] = 'input-xlarge';
		$form['name']['#description'] = t("Enter your username.");
		$form['pass']['#attributes']['class'][] = 'input-xlarge';
	}

	// Request Password
	if ($form['#id'] == 'user-pass') {
		$form['name']['#attributes']['class'][] = 'input-xlarge';
	}

	// Contact Form
	if ($form['#id'] == 'contact-site-form') {
		// dpm($form);
		$form['name']['#title'] = t("Name:");
		$form['name']['#attributes']['class'][] = 'input-xlarge';
		$form['mail']['#title'] = t("Email:");
		$form['mail']['#attributes']['class'][] = 'input-xlarge';
		$form['subject']['#title'] = t("Subject:");
		$form['subject']['#attributes']['class'][] = 'input-xlarge';
		$form['message']['#title'] = t("Questions or Comments:");
		$form['actions']['submit']['#value'] = t("Submit");
	}
}