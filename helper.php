<?php
class ModCountdownHelper
{
    /**
     * Computes the time difference between the provided and current date
     *
     * @param $data string YYYY-mm-dd format
     * @return DateInterval object representing the difference between the
     *  provided and current datas or false on failure.
    */
    public static function getCountdown($date)
    {
        $date = new DateTime($date);
        $current_date = new DateTime();
        return date_diff($date, $current_date);
    }
}

?>
