<?php
// generate aff links and makes 302 redirect
include 'auto-redirector.php';

// Generate menu

register_nav_menus( array(
    'header-menu' => __( 'Header menu' ),
    'header-menu-second' => __( 'Header menu 2' ),
	'footer-menu' => __( 'Footer' ),
	'footer-titled' => __( 'Footer Titled Menu' )
) );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    $classes = array("nav-item");
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_atts', 10, 3 );
function add_menu_atts( $atts, $item, $args ) {
    $atts['class'] = 'nav-item-link';

    if ( $item->current ) {
        $atts['class'] = "nav-item-link__active";
    }

    return $atts;
}
add_filter('nav_menu_item_id', '__return_false');
//remove indentation
// remove_filter('the_content', 'wpautop');
// SHOW THUMBNAILS
if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}
// remove admin-bar on front-page
show_admin_bar(true);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
function my_function_admin_bar() {return false;}
// remove unnesusary wp-styles
add_filter('show_admin_bar', 'my_function_admin_bar');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_resource_hints', 2);

// H1 for category.php
add_action('admin_init', 'category_custom_fields', 1);
add_action('create_category', 'category_custom_fields_save');
add_action('category_add_form_fields', 'category_custom_fields_form');
function category_custom_fields() {
  add_action('edit_category_form_fields', 'category_custom_fields_form');
  add_action('edited_category', 'category_custom_fields_save');
}
function category_custom_fields_form($tag) {
  $t_id = $tag->term_id;
  $cat_meta = get_option("category_$t_id");
  ?>
<tr class="form-field">
  <th scope="row" valign="top"><label for="extra1"><?php _e('H1 для категории');?></label></th>
  <td>
    <input type="text" name="Cat_meta[cat_h1]" id="Cat_meta[cat_h1]" size="25" style="width:60%;" value="<?php echo
  $cat_meta['cat_h1'] ? $cat_meta['cat_h1'] : ''; ?>"><br />
    <span class="description"><?php _e('H1 категории');?></span>
  </td>
</tr>
<?php
}
function category_custom_fields_save($term_id) {
  if (isset($_POST['Cat_meta'])) {
    $t_id = $term_id;
    $cat_meta = get_option("category_$t_id");
    $cat_keys = array_keys($_POST['Cat_meta']);
    foreach ($cat_keys as $key) {
      if (isset($_POST['Cat_meta'][$key])) {
        $cat_meta[$key] = $_POST['Cat_meta'][$key];
      }
    }
    update_option("category_$t_id", $cat_meta);
  }
}
// H1 for tag.php
add_action('admin_init', 'tag_custom_fields', 1);
function tag_custom_fields() {
  add_action('edit_tag_form_fields', 'tag_custom_fields_form');
  add_action('edited_post_tag', 'tag_custom_fields_save');
  add_action('create_post_tag', 'tag_custom_fields_save');
  add_action('post_tag_add_form_fields', 'tag_custom_fields_form');
}
function tag_custom_fields_form($tag) {
  $t_id = $tag->term_id;
  $cat_meta = get_option("post_tag_$t_id");
  ?>
<tr class="form-field">
  <th scope="row" valign="top"><label for="extra1"><?php _e('H1 для tag.php');?></label></th>
  <td>
    <input type="text" name="Cat_meta[h1_for_tag]" id="Cat_meta[h1_for_tag]" size="25" style="width:60%;" value="<?php echo
  $cat_meta['h1_for_tag'] ? $cat_meta['h1_for_tag'] : ''; ?>"><br />
    <span class="description"><?php _e('Title');
  echo ' H1';?></span>
  </td>
</tr>
<?php
}
function tag_custom_fields_save($term_id) {
  if (isset($_POST['Cat_meta'])) {
    $t_id = $term_id;
    $cat_meta = get_option("post_tag_$t_id");
    $cat_keys = array_keys($_POST['Cat_meta']);
    foreach ($cat_keys as $key) {
      if (isset($_POST['Cat_meta'][$key])) {
        $cat_meta[$key] = $_POST['Cat_meta'][$key];
      }
    }
    update_option("post_tag_$t_id", $cat_meta);
  }
}
// Вывод произвольных игр. В код страницы вставить код: <!--@@@\d+-->
function insert_random_game($content) {
  $pattern = '/<!--@@@\d+-->/miU';
  preg_match_all($pattern, $content, $matches);
  $size = count($matches[0]);
  $second_query = new WP_Query();
  $second_query->query(array('orderby' => 'rand' /*,'category__not_in'=>12*/));
  $array[] = 0;
  $m = 0;
  while ($second_query->have_posts()) {
    $second_query->the_post();
    $array[$m] = get_post($post->ID);
    $m++;
  }
  $len = count($array);
  $k = 0;
  for ($i = 0; $i < $size; $i++) {
    $game_line_part = '<ul class="wp-spisok-igr">';
    $result = substr($matches[0][$i], 7, -3) * 1;
    $result = $result + $k;
    for ($k; $k < $result && $k < $len; $k++) {
      $game_line_part = $game_line_part . '<li><a href="' . get_permalink($array[$k]->ID) . '" title="' . get_the_title($array[$k]->ID) . '">' .
      get_the_post_thumbnail($array[$k]->ID) . '<b>' . get_the_title($array[$k]->ID) . '</b></a></li>';
    }
    $game_line_part = $game_line_part . ' </ul>';
    $content = preg_replace($pattern, $game_line_part, $content, 1);
  }
  wp_reset_postdata();
  return $content;
}
// подключаем функцию активации мета блока (my_extra_fields) произвольных полей
add_action('add_meta_boxes', 'my_extra_fields', 1);
function my_extra_fields() {
  add_meta_box('extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'post', 'normal', 'high');
}
// код блока
function extra_fields_box_func($post) {
  ?>
<p><label><input type="text" name="extra[h1]" value="<?php echo get_post_meta($post->ID, 'h1', 1); ?>"
      style="width:50%" /> h1 записи </label></p>

<p>iframe (моб):
  <textarea type="text" name="extra[mob_iframe]"
    style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'mob_iframe', 1); ?></textarea>
</p>
<p>iframe (десктоп):
  <textarea type="text" name="extra[iframe]"
    style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'iframe', 1); ?></textarea>
</p>
<p>Если нет iframe игры, то сюда вписываем название скриншота игрушки, например так -
  <b>aztec-gold-slot-game-screenshot.png</b>
  <br>скриншот заранее загрузить через Медиафайлы:
  <textarea type="text" name="extra[picture]"
    style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'picture', 1); ?></textarea>
</p>

<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
<?php
}
// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);
/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update($post_id) {
  if (!wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__)) {
    return false;
  }
  // проверка
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return false;
  }
  // выходим если это автосохранение
  if (!current_user_can('edit_post', $post_id)) {
    return false;
  }
  // выходим если юзер не имеет право редактировать запись
  if (!isset($_POST['extra'])) {
    return false;
  }
  // выходим если данных нет
  // Все ОК! Теперь, нужно сохранить/удалить данные
  $_POST['extra'] = array_map('trim', $_POST['extra']); // чистим все данные от пробелов по краям
  foreach ($_POST['extra'] as $key => $value) {
    if (empty($value)) {
      delete_post_meta($post_id, $key); // удаляем поле если значение пустое
      continue;
    }
    update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
  }
  return $post_id;
}
// URL toLowerCase

if ( $_SERVER['REQUEST_URI'] != strtolower( $_SERVER['REQUEST_URI']) && !is_admin()) {
  header('Location: //'.$_SERVER['HTTP_HOST'] . strtolower($_SERVER['REQUEST_URI']), true, 301);
  exit();
}


// BREADCRUMBS

function custom_breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ){
	$kb = new Breadcrumbs;
	// add meta[position]
	$res = $kb->get_crumbs( $sep, $l10n, $args );
	$iteration = (substr_count($res, '&&&n&&&'));
	for ($i = 1; $i <= $iteration; $i++) {
		$res = preg_replace('/&&&n&&&/', $i, $res, 1);
	}
	echo $res;
}

class Breadcrumbs {

	public $arg;

	// Локализация
	static $l10n = array(
		'home'       => 'onlineslots.com.ua',
		'paged'      => 'Страница %d',
		'_404'       => 'Ошибка 404',
		'search'     => 'Результаты поиска по запросу - <b>%s</b>',
		'author'     => 'Архив автора: <b>%s</b>',
		'year'       => 'Архив за <b>%d</b> год',
		'month'      => 'Архив за: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Медиа: %s',
		'tag'        => 'Записи по метке: <b>%s</b>',
		'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
		// tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
		// Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
	);

	// Параметры по умолчанию
	static $args = array(
		'on_front_page'   => true,  // выводить крошки на главной странице
		'show_post_title' => true,  // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
		'show_term_title' => true,  // показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
		'title_patt'      => '<span class="kb_title">%s</span>', // шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
		'title_patt'      => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span class="kb_title" itemprop="name">%s</span><meta itemprop="position" content="&&&n&&&" /></span>
', // шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
		'last_sep'        => true,  // показывать последний разделитель, когда заголовок в конце не отображается
		'markup'          => 'schema.org', // 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
										   // или можно указать свой массив разметки:
										   // array( 'wrappatt'=>'<div class="custom_breadcrumbs">%s</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
		'priority_tax'    => array('category'), // приоритетные таксономии, нужно когда запись в нескольких таксах
		'priority_terms'  => array(), // 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
									  // Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
									  // 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
									  // порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
		'nofollow' => false, // добавлять rel=nofollow к ссылкам?
		// служебные
		'sep'             => '',
		'linkpatt'        => '',
		'pg_end'          => '',
	);

	function get_crumbs( $sep, $l10n, $args ){
		global $post, $wp_query, $wp_post_types;

		self::$args['sep'] = $sep;

		// Фильтрует дефолты и сливает
		$loc = (object) array_merge( apply_filters('custom_breadcrumbs_default_loc', self::$l10n ), $l10n );
		$arg = (object) array_merge( apply_filters('custom_breadcrumbs_default_args', self::$args ), $args );

		$arg->sep = '<span class="kb_sep">'. $arg->sep .'</span>'; // дополним

		// упростим
		$sep = & $arg->sep;
		$this->arg = & $arg;

		// микроразметка ---
		if(1){
			$mark = & $arg->markup;

			// Разметка по умолчанию
			if( ! $mark ) $mark = array(
				'wrappatt'  => '<div class="custom_breadcrumbs">%s</div>',
				'linkpatt'  => '<a href="%s">%s</a>',
				'sep_after' => '',
			);
			// rdf
			elseif( $mark === 'rdf.data-vocabulary.org' ) $mark = array(
				'wrappatt'   => '<div class="custom_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
				'linkpatt'   => '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
				'sep_after'  => '</span>', // закрываем span после разделителя!
			);
			// schema.org
			elseif( $mark === 'schema.org' ) $mark = array(
				'wrappatt'   => '<div class="custom_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">%s</div>',
				'linkpatt'   => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="%s" itemprop="item"><span itemprop="name">%s</span></a><meta itemprop="position" content="&&&n&&&" /></span>',
				'sep_after'  => '',
			);

			elseif( ! is_array($mark) )
				die( __CLASS__ .': "markup" parameter must be array...');

			$wrappatt  = $mark['wrappatt'];
			$arg->linkpatt  = $arg->nofollow ? str_replace('<a ','<a rel="nofollow"', $mark['linkpatt']) : $mark['linkpatt'];
			$arg->sep      .= $mark['sep_after']."\n";
		}

		$linkpatt = $arg->linkpatt; // упростим

		$q_obj = get_queried_object();

		// может это архив пустой таксы?
		$ptype = null;
		if( empty($post) ){
			if( isset($q_obj->taxonomy) )
				$ptype = & $wp_post_types[ get_taxonomy($q_obj->taxonomy)->object_type[0] ];
		}
		else $ptype = & $wp_post_types[ $post->post_type ];

		// paged
		$arg->pg_end = '';
		if( ($paged_num = get_query_var('paged')) || ($paged_num = get_query_var('page')) )
			$arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );

		$pg_end = $arg->pg_end; // упростим

		// ну, с богом...
		$out = '';

		if( is_front_page() ){
			return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home ) ) : '';
		}
		// страница записей, когда для главной установлена отдельная страница.
		elseif( is_home() ) {
			$out = $paged_num ? ( sprintf( $linkpatt, get_permalink($q_obj), esc_html($q_obj->post_title) ) . $pg_end ) : esc_html($q_obj->post_title);
		}
		elseif( is_404() ){
			$out = $loc->_404;
		}
		elseif( is_search() ){
			$out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
		}
		elseif( is_author() ){
			$tit = sprintf( $loc->author, esc_html($q_obj->display_name) );
			$out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
		}
		elseif( is_year() || is_month() || is_day() ){
			$y_url  = get_year_link( $year = get_the_time('Y') );

			if( is_year() ){
				$tit = sprintf( $loc->year, $year );
				$out = ( $paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit );
			}
			// month day
			else {
				$y_link = sprintf( $linkpatt, $y_url, $year);
				$m_url  = get_month_link( $year, get_the_time('m') );

				if( is_month() ){
					$tit = sprintf( $loc->month, get_the_time('F') );
					$out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
				}
				elseif( is_day() ){
					$m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
					$out = $y_link . $sep . $m_link . $sep . get_the_time('l');
				}
			}
		}
		// Древовидные записи
		elseif( is_singular() && $ptype->hierarchical ){
			$out = $this->_add_title( $this->_page_crumbs($post), $post );
		}
		// Таксы, плоские записи и вложения
		else {
			$term = $q_obj; // таксономии

			// определяем термин для записей (включая вложения attachments)
			if( is_singular() ){
				// изменим $post, чтобы определить термин родителя вложения
				if( is_attachment() && $post->post_parent ){
					$save_post = $post; // сохраним
					$post = get_post($post->post_parent);
				}

				// учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
				$taxonomies = get_object_taxonomies( $post->post_type );
				// оставим только древовидные и публичные, мало ли...
				$taxonomies = array_intersect( $taxonomies, get_taxonomies( array('hierarchical' => true, 'public' => true) ) );

				if( $taxonomies ){
					// сортируем по приоритету
					if( ! empty($arg->priority_tax) ){
						usort( $taxonomies, function($a,$b)use($arg){
							$a_index = array_search($a, $arg->priority_tax);
							if( $a_index === false ) $a_index = 9999999;

							$b_index = array_search($b, $arg->priority_tax);
							if( $b_index === false ) $b_index = 9999999;

							return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : -1 ); // меньше индекс - выше
						} );
					}

					// пробуем получить термины, в порядке приоритета такс
					foreach( $taxonomies as $taxname ){
						if( $terms = get_the_terms( $post->ID, $taxname ) ){
							// проверим приоритетные термины для таксы
							$prior_terms = & $arg->priority_terms[ $taxname ];
							if( $prior_terms && count($terms) > 2 ){
								foreach( (array) $prior_terms as $term_id ){
									$filter_field = is_numeric($term_id) ? 'term_id' : 'slug';
									$_terms = wp_list_filter( $terms, array($filter_field=>$term_id) );

									if( $_terms ){
										$term = array_shift( $_terms );
										break;
									}
								}
							}
							else
								$term = array_shift( $terms );

							break;
						}
					}
				}

				if( isset($save_post) ) $post = $save_post; // вернем обратно (для вложений)
			}

			// вывод

			// все виды записей с терминами или термины
			if( $term && isset($term->term_id) ){
				$term = apply_filters('custom_breadcrumbs_term', $term );

				// attachment
				if( is_attachment() ){
					if( ! $post->post_parent )
						$out = sprintf( $loc->attachment, esc_html($post->post_title) );
					else {
						if( ! $out = apply_filters('attachment_tax_crumbs', '', $term, $this ) ){
							$_crumbs    = $this->_tax_crumbs( $term, 'self' );
							$parent_tit = sprintf( $linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent) );
							$_out = implode( $sep, array($_crumbs, $parent_tit) );
							$out = $this->_add_title( $_out, $post );
						}
					}
				}
				// single
				elseif( is_single() ){
					if( ! $out = apply_filters('post_tax_crumbs', '', $term, $this ) ){
						$_crumbs = $this->_tax_crumbs( $term, 'self' );
						$out = $this->_add_title( $_crumbs, $post );
					}
				}
				// не древовидная такса (метки)
				elseif( ! is_taxonomy_hierarchical($term->taxonomy) ){
					// метка
					if( is_tag() )
						$out = $this->_add_title('', $term, sprintf( $loc->tag, esc_html($term->name) ) );
					// такса
					elseif( is_tax() ){
						$post_label = $ptype->labels->name;
						$tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
						$out = $this->_add_title('', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html($term->name) ) );
					}
				}
				// древовидная такса (рибрики)
				else {
					if( ! $out = apply_filters('term_tax_crumbs', '', $term, $this ) ){
						$_crumbs = $this->_tax_crumbs( $term, 'parent' );
						$out = $this->_add_title( $_crumbs, $term, esc_html($term->name) );
					}
				}
			}
			// влоежния от записи без терминов
			elseif( is_attachment() ){
				$parent = get_post($post->post_parent);
				$parent_link = sprintf( $linkpatt, get_permalink($parent), esc_html($parent->post_title) );
				$_out = $parent_link;

				// вложение от записи древовидного типа записи
				if( is_post_type_hierarchical($parent->post_type) ){
					$parent_crumbs = $this->_page_crumbs($parent);
					$_out = implode( $sep, array( $parent_crumbs, $parent_link ) );
				}

				$out = $this->_add_title( $_out, $post );
			}
			// записи без терминов
			elseif( is_singular() ){
				$out = $this->_add_title( '', $post );
			}
		}

		// замена ссылки на архивную страницу для типа записи
		$home_after = apply_filters('custom_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );

		if( '' === $home_after ){
			// Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
			if( $ptype && $ptype->has_archive && ! in_array( $ptype->name, array('post','page','attachment') )
				&& ( is_post_type_archive() || is_singular() || (is_tax() && in_array($term->taxonomy, $ptype->taxonomies)) )
			){
				$pt_title = $ptype->labels->name;

				// первая страница архива типа записи
				if( is_post_type_archive() && ! $paged_num )
					$home_after = sprintf( $this->arg->title_patt, $pt_title );
				// singular, paged post_type_archive, tax
				else{
					$home_after = sprintf( $linkpatt, get_post_type_archive_link($ptype->name), $pt_title );

					$home_after .= ( ($paged_num && ! is_tax()) ? $pg_end : $sep ); // пагинация
				}
			}
		}

		$before_out = sprintf( $linkpatt, home_url(), $loc->home ) . ( $home_after ? $sep.$home_after : ($out ? $sep : '') );

		$out = apply_filters('custom_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

		$out = sprintf( $wrappatt, $before_out . $out );

		return apply_filters('custom_breadcrumbs', $out, $sep, $loc, $arg );
	}

	function _page_crumbs( $post ){
		$parent = $post->post_parent;

		$crumbs = array();
		while( $parent ){
			$page = get_post( $parent );
			$crumbs[] = sprintf( $this->arg->linkpatt, get_permalink($page), esc_html($page->post_title) );
			$parent = $page->post_parent;
		}

		return implode( $this->arg->sep, array_reverse($crumbs) );
	}

	function _tax_crumbs( $term, $start_from = 'self' ){
		$termlinks = array();
		$term_id = ($start_from === 'parent') ? $term->parent : $term->term_id;
		while( $term_id ){
			$term       = get_term( $term_id, $term->taxonomy );
			$termlinks[] = sprintf( $this->arg->linkpatt, get_term_link($term), esc_html($term->name) );
			$term_id    = $term->parent;
		}

		if( $termlinks )
			return implode( $this->arg->sep, array_reverse($termlinks) ) /*. $this->arg->sep*/;
		return '';
	}

	// добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
	function _add_title( $add_to, $obj, $term_title = '' ){
		$arg = & $this->arg; // упростим...
		$title = $term_title ? $term_title : esc_html($obj->post_title); // $term_title чиститься отдельно, теги моугт быть...
		$show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

		// пагинация
		if( $arg->pg_end ){
			$link = $term_title ? get_term_link($obj) : get_permalink($obj);
			$add_to .= ($add_to ? $arg->sep : '') . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
		}
		// дополняем - ставим sep
		elseif( $add_to ){
			if( $show_title )
				$add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
			elseif( $arg->last_sep )
				$add_to .= $arg->sep;
		}
		// sep будет потом...
		elseif( $show_title )
			$add_to = sprintf( $arg->title_patt, $title );

		return $add_to;
	}

}
// END BREADCRUMBS


//style and script
add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts() {
  wp_enqueue_style('theme-style', get_stylesheet_uri(), array(),'_bld_1603981525035');
  wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/bundle.js', array(), '_bld_1603981525035');
}

// generate <span></span> in navigation
function filter_function_name_2880($item_output, $item, $depth, $args) {
  $match_class = "nav-item-link__active";
  if (preg_match('/' . $match_class . '/', $item_output)) {
    preg_match('/\">(.*)<\//', $item_output, $matches);
    $item_output = '<span class="' . $match_class . '">' . $matches[1] . '</span>';
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'filter_function_name_2880', 10, 4);

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' => 'Настройки темы',
    'menu_title' => 'Настройки темы',
    'menu_slug' => 'theme-general-settings',
    'capability' => 'edit_posts',
    'position' => 61.5,
  ));
  acf_add_options_sub_page(array(
    'page_title' => 'Настройки Footer',
    'menu_title' => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));
}

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args) {

  foreach ($items as &$item) {
    $icon = get_field('social_icon', $item);
    if ($icon) {
        $item->title = '<img src="' . $icon . '" alt="' . $item->title . '" />';
    //   echo '<a href="' . $item->url . '"></a>';
    }
  }
  return $items;
}

class Custom_Menu_Walker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
    $output .= "<li class='" . implode(" ", $item->classes) . "'>";

    $output .= (0 === $depth) ? '<h5>' . $item->title . '</h5>' : '<a href="' . $item->url . '">' . $item->title . '</a>';
  }
}

function year_shortcode() {
  return date_i18n('Y');
}
add_shortcode('year', 'year_shortcode');

function domain_shortcode() {
  $link = get_site_url();
  $remove_http = '#^http(s)?://#';
  $remove_www = '/^www\./';
  $replace = '';
  $permalink = preg_replace($remove_http, $replace, $link);
  $new_link = preg_replace($remove_www, $replace, $permalink);
  return $new_link;
}
add_shortcode('site', 'domain_shortcode');

add_filter('acf/format_value/type=text', 'do_shortcode');

// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}
