<form id="contact-form" idx="contactus" action="/myapp/contactus"  method="post"
                                class="contact-info__form row row-gap-4">
                                <input name="csrf_token" value="<?= CSRF::get() ?>" type="hidden" />
                                <input name='action' class="   form-control" value='<?= $_GET['del'] ?? '' ?>'
                                <?= ($_GET['del']??"") ? 'readonly' : 'type="hidden"' ?> >
                                <input type='hidden' name='ref' value='<?php echo $_SERVER['HTTP_REFERER'] ?? 'null'; ?>'>

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name*"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control" placeholder="Your Email / Phone*"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="subject" class="form-control"  value='<?php echo $_GET['c'] ?? '' ?>' placeholder="Your Subject*"
                                        required>
                                </div>
                                
                                <div class="col-md-12">
                                    <textarea name="message" class="form-control" placeholder="Message..." required
                                        rows="6"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Send Message
                                    </button>
                                </div>

                                <div class="feeb"></div> 
                            </form>