package com.projectcocoon.webcam.sounds {
	
	import flash.media.SoundChannel;
	import flash.media.Sound;
	
	public class CameraSound {
		
		private var channel:SoundChannel;
		
		public var cameraShutter:Sound = new CameraShutter();
		
		public function CameraSound() {}
		
		public function playShutter():void {
			channel = cameraShutter.play();
		}
		
	}
	
}