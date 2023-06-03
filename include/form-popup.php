<!-- ========= form pop - up ============ -->
<div class="terigerd-box" id="myPopup">
        <div class="overlaye-form " onclick="myFunction()"></div>
        <form action="include/mail" class="form-trigerd r-flex ali-c jut-sb flex-w" >
            <input class="form-pop-input" type="name" id="name" name="name" placeholder="Enter your name..." autocomplete="off">
            <input class="form-pop-input"  type="text" id="reloctionFrom" name="reloctionFrom" value="<?php echo $city; ?>" placeholder="Pick-up point..." autocomplete="off">
            <input class="form-pop-input" type="text" id="reloctionto" name="reloctionto" placeholder="Drop point..." autocomplete="off">
            <input class="form-pop-input" required="required" type="number" id="PhoneNumber" onclick="gtag('event', 'mobile-number_click');" name="PhoneNumber" placeholder="Enter mobile no..." pattern="^[6789]\d{9}$" autocomplete="off">
            <button type="submit" onclick="gtag('event', 'submit_btn_click');" class="form-triged-pop-btn">Know Price</button>
            <a href="tel:9817326797" class="form-call-btn r-flex ali-c jut-sb" onclick="gtag('event', 'pop_call_btn');" >
                <svg width="20" height="20" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.48254 9.34302L8.969 7.07542C9.28252 6.78947 9.50085 6.41137 9.59534 5.99074C9.68983 5.5701 9.65606 5.12658 9.49848 4.71837L8.485 2.0947C8.24037 1.46211 7.76911 0.941798 7.16809 0.640712C6.56707 0.339626 5.88197 0.28065 5.25361 0.475906L3.75314 0.941773C1.82641 1.54042 0.402237 3.35965 0.785201 5.5503C1.15947 7.69335 2.02026 10.7443 3.9854 14.0348C5.94 17.3057 8.19061 19.5176 9.8822 20.8769C11.6251 22.2787 13.9193 21.9077 15.3788 20.494L16.4906 19.4169C16.963 18.9588 17.2395 18.3291 17.2631 17.6573C17.2867 16.9854 17.0556 16.3224 16.6175 15.8046L14.8019 13.6579C14.5192 13.3239 14.1462 13.0817 13.7317 12.963C13.3173 12.8443 12.8808 12.8547 12.4795 12.9928L9.29756 14.088C9.18675 13.9708 9.05289 13.8257 8.90554 13.6561C8.49833 13.1894 7.99797 12.5602 7.59899 11.8876C7.20001 11.2151 6.88813 10.4752 6.67323 9.89329C6.59497 9.68266 6.53131 9.49481 6.48254 9.34302Z" fill="white"/>
                </svg>                                                                                                                                              
                <span>Call Now</span>
            </a>
            <div class="triger-form-close-btn" onclick="myFunction()">
                <svg width="22" height="22" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 8C16 9.58225 15.5308 11.129 14.6518 12.4446C13.7727 13.7602 12.5233 14.7855 11.0615 15.391C9.59966 15.9965 7.99113 16.155 6.43928 15.8463C4.88743 15.5376 3.46197 14.7757 2.34315 13.6569C1.22433 12.538 0.462402 11.1126 0.153721 9.56072C-0.154961 8.00887 0.00346565 6.40034 0.608967 4.93853C1.21447 3.47672 2.23985 2.22729 3.55544 1.34824C4.87103 0.469192 6.41775 0 8 0C10.1217 0 12.1566 0.842854 13.6569 2.34315C15.1571 3.84344 16 5.87827 16 8ZM12.5714 7.42857H5.62857L8.81714 4.22457L8 3.42857L3.42857 8L8 12.5714L8.81714 11.756L5.62857 8.57143H12.5714V7.42857Z" fill="#494949"/>
                </svg>                                                                                                
            </div>
        </form>
</div>
<!-- ========= form pop - up clsoe ============ -->
