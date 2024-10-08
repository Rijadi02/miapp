var Notify = function () {
    "use strict";
    var t = function (t) {
            t.cont.classList.add("notify--fade"), setTimeout((function () {
                t.cont.classList.add("notify--fadeIn")
            }), 100)
        },
        e = function (t) {
            t.cont.classList.remove("notify--fadeIn"), setTimeout((function () {
                t.cont.remove()
            }), t.speed)
        },
        s = function (t) {
            t.cont.classList.add("notify--slide"), setTimeout((function () {
                t.cont.classList.add("notify--slideIn")
            }), 100)
        },
        i = function (t) {
            t.cont.classList.remove("notify--slideIn"), setTimeout((function () {
                t.cont.remove()
            }), t.speed)
        };
    return function () {
        function o(o) {
            var n = this;
            this.notifyOut = function (t) {
                t(n)
            }, this.fadeIn = t, this.fadeOut = e, this.slideIn = s, this.slideOut = i;
            var c = o.status,
                r = o.type,
                a = void 0 === r ? 1 : r,
                C = o.title,
                h = o.text,
                d = o.showIcon,
                l = void 0 === d || d,
                p = o.customIcon,
                u = void 0 === p ? "" : p,
                f = o.customClass,
                v = void 0 === f ? "" : f,
                m = o.speed,
                y = void 0 === m ? 500 : m,
                w = o.effect,
                L = void 0 === w ? "fade" : w,
                g = o.showCloseButton,
                I = void 0 === g || g,
                x = o.autoclose,
                E = void 0 !== x && x,
                M = o.autotimeout,
                O = void 0 === M ? 3e3 : M,
                Z = o.gap,
                b = void 0 === Z ? 20 : Z,
                B = o.distance,
                T = void 0 === B ? 20 : B,
                N = o.position,
                _ = void 0 === N ? "right top" : N,
                ee = o.href;
            this.status = c, this.title = C, this.text = h, this.href = ee, this.showIcon = l, this.customIcon = u, this.customClass = v, this.speed = y, this.effect = L, this.showCloseButton = I, this.autoclose = E, this.autotimeout = O, this.gap = b, this.distance = T, this.type = a, this.position = _, this.checkRequirements() ? (this.setContainer(), this.setCont(), this.setWrapper(), this.setPosition(), this.showIcon && this.setIcon(), this.showCloseButton && this.setCloseButton(), this.setContent(), this.container.prepend(this.cont), this.setEffect(), this.notifyIn(this.selectedNotifyInEffect), this.autoclose && this.autoClose(), this.setObserver()) : console.error("You must specify 'title' or 'text' at least.")
        }
        return o.prototype.checkRequirements = function () {
            return !(!this.title && !this.text)
        }, o.prototype.setContainer = function () {
            var t = document.querySelector(".notifications-container");
            t ? this.container = t : (this.container = document.createElement("div"), this.container.classList.add("notifications-container"), document.body.appendChild(this.container)), this.container.style.setProperty("--distance", this.distance + "px")
        }, o.prototype.setCont = function () {
            var t = document.createElement("div");
            this.container.appendChild(t);
            this.cont = t, this.cont.style.transitionDuration = this.speed + "ms";
        }, o.prototype.setPosition = function () {
            var t = "notify-is-";
            "center" === this.position ? this.container.classList.add(t + "center") : this.container.classList.remove(t + "center"), this.position.includes("left") ? this.container.classList.add(t + "left") : this.container.classList.remove(t + "left"), this.position.includes("right") ? this.container.classList.add(t + "right") : this.container.classList.remove(t + "right"), this.position.includes("x-center") ? this.container.classList.add(t + "x-center") : this.container.classList.remove(t + "x-center"), this.position.includes("top") ? this.container.classList.add(t + "top") : this.container.classList.remove(t + "top"), this.position.includes("bottom") ? this.container.classList.add(t + "bottom") : this.container.classList.remove(t + "bottom"), this.position.includes("y-center") ? this.container.classList.add(t + "y-center") : this.container.classList.remove(t + "y-center")
        }, o.prototype.setCloseButton = function () {
            var t = this,
                e = document.createElement("div");
            e.classList.add("notify__close"), e.innerHTML = '<svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.94 7.99988L13.14 3.80655C13.2655 3.68101 13.3361 3.51075 13.3361 3.33321C13.3361 3.15568 13.2655 2.98542 13.14 2.85988C13.0145 2.73434 12.8442 2.66382 12.6667 2.66382C12.4891 2.66382 12.3189 2.73434 12.1933 2.85988L8 7.05988L3.80667 2.85988C3.68113 2.73434 3.51087 2.66382 3.33333 2.66382C3.1558 2.66382 2.98554 2.73434 2.86 2.85988C2.73446 2.98542 2.66394 3.15568 2.66394 3.33321C2.66394 3.51075 2.73446 3.68101 2.86 3.80655L7.06 7.99988L2.86 12.1932C2.79751 12.2552 2.74792 12.3289 2.71407 12.4102C2.68023 12.4914 2.6628 12.5785 2.6628 12.6665C2.6628 12.7546 2.68023 12.8417 2.71407 12.9229C2.74792 13.0042 2.79751 13.0779 2.86 13.1399C2.92198 13.2024 2.99571 13.252 3.07695 13.2858C3.15819 13.3197 3.24533 13.3371 3.33333 13.3371C3.42134 13.3371 3.50848 13.3197 3.58972 13.2858C3.67096 13.252 3.74469 13.2024 3.80667 13.1399L8 8.93988L12.1933 13.1399C12.2553 13.2024 12.329 13.252 12.4103 13.2858C12.4915 13.3197 12.5787 13.3371 12.6667 13.3371C12.7547 13.3371 12.8418 13.3197 12.9231 13.2858C13.0043 13.252 13.078 13.2024 13.14 13.1399C13.2025 13.0779 13.2521 13.0042 13.2859 12.9229C13.3198 12.8417 13.3372 12.7546 13.3372 12.6665C13.3372 12.5785 13.3198 12.4914 13.2859 12.4102C13.2521 12.3289 13.2025 12.2552 13.14 12.1932L8.94 7.99988Z" fill="currentColor"/></svg>', this.cont.appendChild(e), e.addEventListener("click", (function () {
                t.close()
            }))
        }, o.prototype.setWrapper = function () {
            var t = document.createElement("a");
            this.cont.appendChild(t);
            this.wrapper = t, this.wrapper.setAttribute("href", this.href), this.wrapper.style.setProperty("--gap", this.gap + "px"), this.wrapper.classList.add("notify"), this.wrapper.classList.add("notify--type-" + this.type), this.wrapper.classList.add("notify--" + this.status), this.customClass && this.wrapper.classList.add(this.customClass)
        }, o.prototype.setContent = function () {
            var t, e, s = document.createElement("div");
            s.classList.add("notify-content"), this.title && ((t = document.createElement("div")).classList.add("notify__title"), t.textContent = this.title, this.showCloseButton || (t.style.paddingRight = "0")), this.text && ((e = document.createElement("div")).classList.add("notify__text"), e.innerHTML = this.text.trim(), this.title || (e.style.marginTop = "0")), this.wrapper.appendChild(s), this.title && s.appendChild(t), this.text && s.appendChild(e)
        }, o.prototype.setIcon = function () {
            var t = document.createElement("div");
            t.classList.add("notify__icon"), t.innerHTML = this.customIcon || function (t) {
                switch (t) {
                    case "success":
                        return '<svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M19.6267 11.7201L13.9067 17.4534L11.7067 15.2534C11.5871 15.1138 11.44 15.0005 11.2746 14.9204C11.1092 14.8404 10.929 14.7954 10.7454 14.7884C10.5618 14.7813 10.3787 14.8122 10.2076 14.8792C10.0365 14.9463 9.88107 15.0479 9.75113 15.1779C9.62119 15.3078 9.51951 15.4632 9.45248 15.6343C9.38545 15.8054 9.35451 15.9885 9.3616 16.1722C9.36869 16.3558 9.41366 16.536 9.4937 16.7014C9.57373 16.8668 9.68709 17.0139 9.82666 17.1334L12.96 20.2801C13.0846 20.4037 13.2323 20.5014 13.3948 20.5678C13.5572 20.6341 13.7312 20.6678 13.9067 20.6667C14.2564 20.6653 14.5916 20.5264 14.84 20.2801L21.5067 13.6134C21.6316 13.4895 21.7308 13.342 21.7985 13.1795C21.8662 13.017 21.9011 12.8428 21.9011 12.6667C21.9011 12.4907 21.8662 12.3165 21.7985 12.154C21.7308 11.9915 21.6316 11.844 21.5067 11.7201C21.2568 11.4717 20.9189 11.3324 20.5667 11.3324C20.2144 11.3324 19.8765 11.4717 19.6267 11.7201ZM16 2.66675C13.3629 2.66675 10.785 3.44873 8.59239 4.91382C6.39974 6.37891 4.69077 8.46129 3.6816 10.8976C2.67243 13.334 2.40839 16.0149 2.92286 18.6013C3.43733 21.1877 4.70721 23.5635 6.57191 25.4282C8.43661 27.2929 10.8124 28.5627 13.3988 29.0772C15.9852 29.5917 18.6661 29.3276 21.1024 28.3185C23.5388 27.3093 25.6212 25.6003 27.0863 23.4077C28.5513 21.215 29.3333 18.6372 29.3333 16.0001C29.3333 14.2491 28.9885 12.5153 28.3184 10.8976C27.6483 9.27996 26.6662 7.81011 25.4281 6.57199C24.19 5.33388 22.7201 4.35175 21.1024 3.68169C19.4848 3.01162 17.751 2.66675 16 2.66675ZM16 26.6667C13.8903 26.6667 11.828 26.0412 10.0739 24.8691C8.31979 23.697 6.95262 22.0311 6.14528 20.082C5.33795 18.133 5.12671 15.9882 5.53829 13.9191C5.94986 11.85 6.96576 9.94937 8.45752 8.45761C9.94928 6.96585 11.8499 5.94995 13.919 5.53837C15.9882 5.1268 18.1329 5.33803 20.082 6.14537C22.031 6.9527 23.6969 8.31987 24.869 10.074C26.0411 11.8281 26.6667 13.8904 26.6667 16.0001C26.6667 18.8291 25.5429 21.5422 23.5425 23.5426C21.5421 25.5429 18.829 26.6667 16 26.6667Z"/></svg>';
                    case "warning":
                        return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>';
                    case "error":
                        return '<svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M16 2.66675C13.3629 2.66675 10.785 3.44873 8.59239 4.91382C6.39974 6.37891 4.69077 8.46129 3.6816 10.8976C2.67243 13.334 2.40839 16.0149 2.92286 18.6013C3.43733 21.1877 4.70721 23.5635 6.57191 25.4282C8.43661 27.2929 10.8124 28.5627 13.3988 29.0772C15.9852 29.5917 18.6661 29.3276 21.1024 28.3185C23.5388 27.3093 25.6212 25.6003 27.0863 23.4077C28.5513 21.215 29.3333 18.6372 29.3333 16.0001C29.3333 14.2491 28.9885 12.5153 28.3184 10.8976C27.6483 9.27996 26.6662 7.81011 25.4281 6.57199C24.19 5.33388 22.7201 4.35175 21.1024 3.68169C19.4848 3.01162 17.751 2.66675 16 2.66675ZM16 26.6667C13.171 26.6667 10.4579 25.5429 8.45752 23.5426C6.45714 21.5422 5.33333 18.8291 5.33333 16.0001C5.33038 13.6312 6.12402 11.3301 7.58666 9.46675L22.5333 24.4134C20.6699 25.8761 18.3689 26.6697 16 26.6667ZM24.4133 22.5334L9.46666 7.58675C11.3301 6.1241 13.6311 5.33047 16 5.33341C18.829 5.33341 21.5421 6.45722 23.5425 8.45761C25.5429 10.458 26.6667 13.1711 26.6667 16.0001C26.6696 18.369 25.876 20.67 24.4133 22.5334Z"/></svg>'
                }
            }(this.status), (this.status || this.customIcon) && this.wrapper.appendChild(t)
        }, o.prototype.setObserver = function () {
            var t = this,
                e = new IntersectionObserver((function (e) {
                    e[0].intersectionRatio <= 0 && t.close()
                }), {
                    threshold: 0
                });
            setTimeout((function () {
                e.observe(t.wrapper)
            }), this.speed)
        }, o.prototype.notifyIn = function (t) {
            t(this)
        }, o.prototype.autoClose = function () {
            var t = this;
            setTimeout((function () {
                t.close()
            }), this.autotimeout + this.speed)
        }, o.prototype.close = function () {
            this.notifyOut(this.selectedNotifyOutEffect)
        }, o.prototype.setEffect = function () {
            switch (this.effect) {
                case "fade":
                    this.selectedNotifyInEffect = this.fadeIn, this.selectedNotifyOutEffect = this.fadeOut;
                    break;
                case "slide":
                    this.selectedNotifyInEffect = this.slideIn, this.selectedNotifyOutEffect = this.slideOut;
                    break;
                default:
                    this.selectedNotifyInEffect = this.fadeIn, this.selectedNotifyOutEffect = this.fadeOut
            }
        }, o
    }()
}();
