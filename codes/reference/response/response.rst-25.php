
    <?php

    class FeedController extends Phalcon\Mvc\Controller
    {

        public function getAction()
        {
            // Получение экземпляра Response
            $response = new \Phalcon\Http\Response();

            $feed = //.. тут данные

            // Установка содержимого ответа
            $response->setContent($feed->asString());

            // Возврат Response ответа
            return $response;
        }

    }

