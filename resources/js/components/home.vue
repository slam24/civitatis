<style>
  .modal-backdrop {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .modal {
    background: #FFFFFF;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
  }

  .modal-header,
  .modal-footer {
    padding: 15px;
    display: flex;
  }

  .modal-header {
    position: relative;
    border-bottom: 1px solid #eeeeee;
    color: #4AAE9B;
    justify-content: space-between;
  }

  .modal-footer {
    border-top: 1px solid #eeeeee;
    flex-direction: column;
    justify-content: flex-end;
  }

  .modal-body {
    position: relative;
    padding: 20px 10px;
  }

  .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    border: none;
    font-size: 20px;
    padding: 10px;
    cursor: pointer;
    font-weight: bold;
    color: #4AAE9B;
    background: transparent;
  }

  .btn-green {
    color: white;
    background: #4AAE9B;
    border: 1px solid #4AAE9B;
    border-radius: 2px;
  }
</style>
<template>
    <div>
        <range-datepickers v-model="daterange" start-date="11-10-2021" end-date="11-20-2021" name="daterange" language="es"></range-datepickers>

        <div style="margin-bottom: 10px;" class="m-supercalendar__buttons" @click="search('range')">
            <a id="goToBooking02" href="#" class="a-button-big a-button--inverse" title="Comprar">Buscar</a>
            <input style="margin-top: 10px;background: #f70759;width: 50%;display: block;margin-right: auto;margin-left: auto;" id="gotoSubmit" type="submit" class="a-button-big a-button--inverse" value="Buscar" data-cart="true">
        </div>

        <div style="margin-bottom: 5px;" class="m-supercalendar__buttons" @click="search('all')">
            <a id="goToBooking02" href="#" class="a-button-big a-button--inverse" title="Comprar">Clear</a>
            <input style="margin-top: 10px;background: #0d6efd;width: 50%;display: block;margin-right: auto;margin-left: auto;" id="gotoSubmit" type="submit" class="a-button-big a-button--inverse" value="Clear" data-cart="true">
        </div>
        <h2 v-if="activities.length === 0" style="text-align: center;">No hay actividades en este rango de fechas.</h2>
        <div class="o-search-list o-search-list--activities" id="activities-container">
            <div v-for="activity in activities" :key="activity.id" class="o-search-list__item" style="margin-bottom: 10px;">
                <article class="comfort-card _cancelation" data-activity="1603" data-longitude="12.4558222" data-latitude="41.9086683" data-categories="">                                             
                    <a class="comfort-card__like" href="#" title="like">
                        <span class="comfort-card__like__label">like</span>
                    </a>
                    <a @click="showModal(activity)">
                        <div class="comfort-card__img" id="activity-image-1603" style="height: 186px;">
                            <img class="b-lazy b-loaded bloaded" src="https://cdn2.civitatis.com/italia/roma/visita-guiada-vaticano-list.jpg" alt="Vatican City Tour: Sistine Chapel &amp; Museums">
                        </div>

                        <div class="comfort-card__content">
                            <div class="__left">
                                <h3 class="comfort-card__title">{{ activity.title }}</h3>
                                <div class="m-rating__list-container">
                                    <div class="m-rating">
                                        <span class="m-rating--text">{{ activity.ranking }}
                                            <span class="__total">
                                                / 10</span>
                                        </span>
                                    </div>
                                                                                                
                                    <span class="comfort-card__traveler-count _full">161,757 travellers</span>
                                    <span class="comfort-card__traveler-count _k">162K travellers</span>
                                    <div class="comfort-card__cancelation _show-filters-large">
                                        <span data-civtip="" aria-haspopup="true" class="has-tip top _processed" title="Free cancellation up to 24 hours before the activity. If you cancel after this point, or do not attend, you will not be offered a refund." data-allow-html="true" data-tooltip-class="tooltip hide-for-small-only hide-for-medium-only activity-tooltip --small" data-disable-for-touch="true">Free cancellation</span>
                                    </div>
                                </div>
                            </div>
                            <div class="__center">
                                <div class="comfort-card__text">
                                    {{ activity.description }}
                                </div>
                            </div>
                            <div class="__right">
                                <div class="comfort-card__extra-info">
                                    <div class="comfort-card__features" id="activity-features-1603">
                                        <span data-civtip="" class="comfort-card__feature _duration has-tip top _processed" title=" 3 hours" data-allow-html="true" data-tooltip-class="tooltip activity-tooltip">
                                                 3 hours
                                            </span>
                                        <span data-civtip="" class="comfort-card__feature _visita-guiada-free-tours has-tip top _new-list-feature _hide-for-grid-list _processed" title="Guided tours and free tours" data-allow-html="true" data-tooltip-class="tooltip activity-tooltip city-list__feature-tooltip">Guided tours and free tours</span>
                                    </div>
                                    <div class="comfort-card__cancelation _hide-filters-large">
                                        <span data-civtip="" aria-haspopup="true" class="has-tip top _processed" title="Free cancellation up to 24 hours before the activity. If you cancel after this point, or do not attend, you will not be offered a refund." data-allow-html="true" data-tooltip-class="tooltip hide-for-small-only hide-for-medium-only activity-tooltip --small" data-disable-for-touch="true">Free cancellation</span>
                                    </div>
                                </div>
                                <div class="comfort-card__price">
                                    <div class="comfort-card__price__text__wrapper">
                                        <span class="comfort-card__price__text"><span><bdi>US$</bdi></span> {{ activity.price_adult }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="__bottom hide">
                                <div class="comfort-card__cancelation _grid-cancelation">
                                    <span data-civtip="" aria-haspopup="true" class="has-tip top _processed" title="Free cancellation up to 24 hours before the activity. If you cancel after this point, or do not attend, you will not be offered a refund." data-allow-html="true" data-tooltip-class="tooltip hide-for-small-only hide-for-medium-only activity-tooltip --small" data-disable-for-touch="true">Free cancellation</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-availability"></div>
                    </a>
                </article>
            </div>
        </div>

    <div class="modal" v-show="isModalVisible">
      <header class="modal-header" style="font-size: xx-large;">
        <slot name="header">
          {{ setactivity.title }}
        </slot>
        <button
          type="button"
          class="btn-close"
          @click="closeModal"
        >
          x
        </button>
      </header>

        <section class="modal-body">
            <slot name="body">
                <h4>Descripcion:</h4><p>{{ setactivity.description }}</p>
                <h4>Ranking:</h4><p style="font-size: xxx-large;color: #f70759;">{{ setactivity.ranking }}</p>
                <h4>Categoria:</h4><p>{{ setactivity.cat }}</p>
                <h4>Precio</h4>
                <div class="m-activity-detail m-activity-detail--price hide-for-xlarge">
                    <ul>
                        <li>
                            <p class="prices-title _is-width-equalized" style="height: 50px !important;">Adults</p>
                            <div class="-inner" style="background: #a9ffef;">
                                <div class="-inner--inner">
                                    <span class="a-text--table-price"><span><bdi>US$</bdi></span> {{ setactivity.price_adult }}</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p class="prices-title _is-width-equalized" style="height: 50px !important;">Children 6-12 years old</p>
                            <div class="-inner" style="background: #a9ffef;">
                                <div class="-inner--inner">
                                    <span class="a-text--table-price"><span><bdi>US$</bdi></span> {{ setactivity.price_child }}</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p class="prices-title _is-width-equalized" style="height: 50px !important;">Children under 6 years old</p>
                            <div class="-inner" style="background: #a9ffef;">
                                <div class="-inner--inner">
                                    <span class="a-text--table-price">Free</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <fieldset class="o-form-block">
                    <h2 class="a-title--header-form">Detalles de la compra</h2>
                    <div class="row">
                      <p v-if="errors.length">
                        <b>Algunos campos son requeridos:</b>
                        <ul>
                          <li style="color: red;" v-for="error in errors">{{ error }}</li>
                        </ul>
                      </p>
                    </div>
                    <div class="row">
                        <div class="columns small-12 large-4">
                                <label for="dater">Fecha de reserva</label>
                            <div class="u-floating-label--s">
                                <input type="date" v-model="dater" id="dater" name="dater" maxlength="64" required="" data-parsley-trigger="change" data-copyinput="dater" value="">
                            </div>
                        </div>
                        <div class="columns small-12 large-4">
                                <label for="adults">Adultos</label>
                            <div class="u-floating-label--s">
                                <input type="number" v-model="adults" id="adults" name="adults" maxlength="128" required="" data-copyinput="adults" value="0">
                            </div>
                        </div>
                        <div class="columns small-12 large-4">
                                <label for="apellidos">Niños</label>
                            <div class="u-floating-label--s">
                                <input type="number" v-model="childs" id="childs" name="childs" maxlength="128" required="" data-copyinput="childs" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="columns small-12 large-6">
                                <label for="nombre">Nombre</label>
                            <div class="u-floating-label--s">
                                <input type="text" v-model="nombre" id="nombre" name="nombre" maxlength="64" required="" data-parsley-trigger="change" data-copyinput="nombre" value="" data-parsley-unicodelettersandspaces="true">
                            </div>
                        </div>
                        <div class="columns small-12 large-6">
                                <label for="apellidos">Apellido</label>
                            <div class="u-floating-label--s">
                                <input type="text" v-model="apellidos" id="apellidos" name="apellidos" maxlength="128" required="" data-copyinput="apellidos" value="" data-parsley-unicodelettersandspaces="true">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="columns small-12 large-6">
                            <div class="row">
                                <div class="columns small-12">
                                        <label for="email">
                                            Correo
                                        </label>
                                    <div class="u-floating-label--s">
                                        <input type="email" v-model="email" id="email" name="email" maxlength="128" data-csrf-token="0eb403d9b7d843a0cc58016273773bc69d8b050a3fe8218f8e19dc3413475ef7" data-email-status-input="email_status" required="" data-parsley-trigger="change" value="">
                                        <input type="hidden" id="email_status" name="email_status" value="valid" data-parsley-id="28"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns small-12 large-6">
                            <div class="row">
                                <div class="columns small-12">
                                        <label for="telefono">
                                            Telefono celular
                                        </label>
                                    <div class="u-floating-label--s">
                                        <input type="tel" v-model="telefono" id="telefono" name="telefono" required="" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <h3>Total a pagar: $ {{ total }}</h3>
                <div class="m-supercalendar__buttons" @click="book">
                    <a id="goToBooking02" href="#" class="a-button-big a-button--inverse" title="Comprar">Comprar</a>
                    <input style="margin-top: 10px;background: #f70759;width: 50%;display: block;margin-right: auto;margin-left: auto;" id="gotoSubmit" type="submit" class="a-button-big a-button--inverse" value="Comprar" data-cart="true">
                </div>
            </slot>
       </section>

      <footer class="modal-footer">
        <slot name="footer">
        </slot>
        <button
          type="button"
          class="btn-green"
          @click="closeModal"
        >
          Close
        </button>
      </footer>
    </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                activities: [],
                showMessage: false,
                setactivity: {},
                isModalVisible: false,
                errors: [],
                nombre: null,
                apellidos: null,
                email: null,
                telefono: null,
                dater: null,
                adults: 0,
                childs: 0,
                total: 0,
                daterange: new Date(2016, 9,  16),
            }
        },
          watch: {
            childs: function (val) {
                if ((this.adults+this.childs) > 0) {
                    this.total = Number(((this.adults*this.setactivity.price_adult) + (this.childs*this.setactivity.price_child)).toFixed(2));
                }
            },
            adults: function (val) {
                if ((this.adults+this.childs) > 0) {
                    this.total = Number(((this.adults*this.setactivity.price_adult) + (this.childs*this.setactivity.price_child)).toFixed(2));
                }
            }
          },
        created() {
            this.search('all');
        },
        methods: {
            search(type) {
                this.axios
                    .get('http://localhost:8000/api/activities?typeOption='+type+'&start='+this.convertDate(this.daterange.start)+'&end='+this.convertDate(this.daterange.end))
                    .then(response => {
                        this.activities = response.data;
                    });
            },
            convertDate(date) {
                var d = new Date(date);
                var n = d.getFullYear()+"-"+((d.getMonth()+1) < 10 ? "0"+(d.getMonth()+1): (d.getMonth()+1))+"-"+((d.getDate()) < 10 ? "0"+(d.getDate()): (d.getDate()));
                return n;
            },
            showModal(activity) {
                this.setactivity = activity;
                this.isModalVisible = true;
            },
            closeModal() {
                this.isModalVisible = false;
                this.nombre = null;
                this.apellidos = null;
                this.telefono = null;
                this.email = null;
                this.adults = 0;
                this.childs = 0;
                this.email = null;
                this.errors = [];
            },
            validEmail: function (email) {
              var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
              return re.test(email);
            },
            book(){
              this.errors = [];

              if (!this.nombre) {
                this.errors.push("Nombre Requerido.");
              }
              if (!this.apellidos) {
                this.errors.push("Apellidos Requerido.");
              }
              if (!this.telefono) {
                this.errors.push("Telefono Requerido.");
              }
              if (!this.email) {
                this.errors.push('Correo requerido.');
              } else if (!this.validEmail(this.email)) {
                this.errors.push('Correo invalido.');
              }

              if ((this.adults+this.childs) == 0) {
                this.errors.push("Debe ingresar la cantidad de personas.");
              }

              if (!this.dater) {
                this.errors.push("Fecha Requerido.");
              }

              if (!this.errors.length) {
                this.axios
                    .post('http://localhost:8000/api/books', {
                        name: this.nombre,
                        surname: this.apellidos,
                        email: this.email,
                        mobile_number: this.telefono,
                        id: this.setactivity.id,
                        adults: this.adults,
                        childs: this.childs,
                        dater: this.dater,
                    })
                    .then(response => (
                        this.$swal.fire(
                          'Exelente!',
                          'Tu reserva se a realizado!',
                          'success'
                        )
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.closeModal())
              }
            }
        }
    }
</script>
