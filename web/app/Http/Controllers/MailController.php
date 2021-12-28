<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\OrderShipped;

class MailController extends Controller implements ShouldQueue
{
/** * 메일 전송 소스 입니다. 테스트 용으로 하드코딩을 했습니다.
	*
	* @return string
	*/
	public function send(Request $request) {

		if($request->input('mail-type') == 'visit') {
			$subject = $request->input('visit-name').'님의 상담신청이 도착했습니다.';
			$data = array(
				'date' => $request->input('visit-date'),
				'time' => $request->input('visit-time'),
				'name' => $request->input('visit-name'),
				'phone' => $request->input('visit-phone'),
				'email' => $request->input('visit-email'),
				'address' => $request->input('visit-address'),
				'site' => $request->input('visit-site'),
				'comment' => $request->input('visit-comment')
			);

			try {
				Mail::send('emails.orders.shipped', $data, function($message) use ($subject) {
					$message->from('cs@hauoli.kr', 'hauoli');
					$message->to('cs@hauoli.kr', 'hauoli')->subject($subject);
				});

				$response_array['status'] = 'success';
			} catch (\Exception $e) {
				$response_array['status'] = 'error';
			}
		} else if ($request->input('mail-type') == 'subscribe') {
			$subject = '뉴스레터 구독 신청이 도착했습니다.';
			$data = array(
				'email' => $request->input('subs-email')
			);

			try {
				Mail::send('emails.orders.subs', $data, function($message) use ($subject) {
					$message->from('cs@hauoli.kr', 'hauoli');
					$message->to('cs@hauoli.kr', 'hauoli')->subject($subject);
				});

				$response_array['status'] = 'success';
			} catch (\Exception $e) {
				$response_array['status'] = 'error';
			}
		}

		return json_encode($response_array);
	}
}
