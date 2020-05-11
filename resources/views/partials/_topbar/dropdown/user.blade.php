
<!--begin: Head -->
<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(assets/media/misc/bg-1.jpg)">
	<div class="kt-user-card__avatar">
		<img class="kt-hidden" alt="Pic" src="assets/media/users/300_25.jpg" />

		<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
		<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">{{  strtoupper(Auth::user()->prenom[0])  }}</span>
	</div>
	<div class="kt-user-card__name">
		{{ strtoupper(Auth::user()->prenom)." ". strtoupper(Auth::user()->nom) }}
	</div>
</div>

<!--end: Head -->

<!--begin: Navigation -->
<div class="kt-notification">
	{{-- <a href="custom/apps/user/profile-1/personal-information.html" class="kt-notification__item"> --}}
	<a href="{{ url('profile') }}" class="kt-notification__item">
		<div class="kt-notification__item-icon">
			<i class="flaticon2-calendar-3 kt-font-success"></i>
		</div>
		<div class="kt-notification__item-details">
			<div class="kt-notification__item-title kt-font-bold">
				Mon Profile
			</div>
			<div class="kt-notification__item-time">
				Gestion de votre profile utilisateur
			</div>
		</div>
	</a>
	<a href="custom/apps/user/profile-3.html" class="kt-notification__item">
		<div class="kt-notification__item-icon">
			<i class="flaticon2-mail kt-font-warning"></i>
		</div>
		<div class="kt-notification__item-details">
			<div class="kt-notification__item-title kt-font-bold">
				Mes Messages
			</div>
			<div class="kt-notification__item-time">
				Tous mes messages...
			</div>
		</div>
	</a>
	<a href="custom/apps/user/profile-2.html" class="kt-notification__item">
		<div class="kt-notification__item-icon">
			<i class="flaticon2-rocket-1 kt-font-danger"></i>
		</div>
		<div class="kt-notification__item-details">
			<div class="kt-notification__item-title kt-font-bold">
				Mes Activitées
			</div>
			<div class="kt-notification__item-time">
				Logs de mes activitées
			</div>
		</div>
	</a>
	<div class="kt-notification__custom kt-space-between">
		<a href="{{ url('logout') }}" target="_blank" class="btn btn-label
                    btn-label-brand btn-sm btn-bold">Se déconnecter</a>
	</div>
</div>

<!--end: Navigation -->
