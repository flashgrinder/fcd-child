<?php

    // Подсчёт времени чтения статьи
    function estimated_reading_time(){
        $post = get_post();
        $postcnt = strip_tags( $post->post_content );
        $words = count(preg_split('/\s+/', $postcnt));
        $minutes = floor( $words / 120 );
        $seconds = floor( $words % 120 / ( 120 / 60 ) );
        if (1 <= $minutes){$estimated_time = 'Читать ' . $minutes . ' мин ' . ($minutes == 1 ? '' : '');}
        else{$estimated_time = 'Читать ' . $seconds . ' сек' . ($seconds == 1 ? '' : '');}
        echo $estimated_time;
    }

    // Подсчет количества посещений страниц
    function kama_postviews( $args = [] ){
        global $user_ID, $post, $wpdb;

        if( ! $post || ! is_singular() )
            return;

        $rg = (object) wp_parse_args( $args, [
            // Ключ мета поля поста, куда будет записываться количество просмотров.
            'meta_key' => 'views',
            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
            'who_count' => 0,
            // Исключить ботов, роботов? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.
            'exclude_bots' => 0,
        ] );

        $do_count = false;
        switch( $rg->who_count ){

            case 0:
                $do_count = true;
                break;
            case 1:
                if( ! $user_ID )
                    $do_count = true;
                break;
            case 2:
                if( $user_ID )
                    $do_count = true;
                break;
        }

        if( $do_count && $rg->exclude_bots ){

            $notbot = 'Mozilla|Opera'; // Chrome|Safari|Firefox|Netscape - все равны Mozilla
            $bot = 'Bot/|robot|Slurp/|yahoo';
            if(
                ! preg_match( "/$notbot/i", $_SERVER['HTTP_USER_AGENT'] ) ||
                preg_match( "~$bot~i", $_SERVER['HTTP_USER_AGENT'] )
            ){
                $do_count = false;
            }

        }

        if( $do_count ){

            $up = $wpdb->query( $wpdb->prepare(
                "UPDATE $wpdb->postmeta SET meta_value = (meta_value+1) WHERE post_id = %d AND meta_key = %s", $post->ID, $rg->meta_key
            ) );

            if( ! $up )
                add_post_meta( $post->ID, $rg->meta_key, 1, true );

            wp_cache_delete( $post->ID, 'post_meta' );
        }

    }

    // Склонение слов
    function num_decline( $number, $titles, $show_number = 1 ){

        if( is_string( $titles ) )
            $titles = preg_split( '/, */', $titles );
    
        // когда указано 2 элемента
        if( empty( $titles[2] ) )
            $titles[2] = $titles[1];
    
        $cases = [ 2, 0, 1, 1, 1, 2 ];
    
        $intnum = abs( (int) strip_tags( $number ) );
    
        $title_index = ( $intnum % 100 > 4 && $intnum % 100 < 20 )
            ? 2
            : $cases[ min( $intnum % 10, 5 ) ];
    
        return ( $show_number ? "$number " : '' ) . $titles[ $title_index ];
    }