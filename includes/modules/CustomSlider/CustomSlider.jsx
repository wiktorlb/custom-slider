// External Dependencies
import React, { Component } from 'react';
import Slider from "react-slick";

import './style.css';

// import "slick-carousel/slick/slick.css";
// import "slick-carousel/slick/slick-theme.css"; 


class CustomSliderParent extends Component {

  static slug = 'dicm_slider_parent';

  /**
   * Module render in VB
   * Basically DICM_CTA_Parent->render() equivalent in JSX
   */
  render() {
    const settings = {
        arrows: false,
        dots: true,
        infinite: false,
        speed: 500,
        slidesToShow: this.props.amount_photos,
        autoplay: true,
        autoplaySpeed: 300,
        centerMode: true,
        centerPadding: '20px',
        pauseOnHover: this.props.stop_hover,
      };
    return (
     /*<div>
        <h2 className="dicm-title">{this.props.title}</h2>
        <h2 className="dicm-title">{this.props.stop_hover}</h2>
        <h2 className="dicm-title">{this.props.range_slider}</h2>
        <h2 className="dicm-title">{this.props.amount_photos}</h2>
        <div className="dicm-content">{this.props.content}</div>
      </div> */

    <div>
      <h2 className="title">{this.props.title}</h2>
      <Slider {...settings}>
        <div className='front-slick'>
          <div>
            <img alt= "alt" src="https://images.unsplash.com/photo-1610151642964-cafd5a955564?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"/>
          </div>
          <div>
            <img alt= "alt" src="https://images.unsplash.com/photo-1610151642964-cafd5a955564?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"/>
          </div>
          <div>
            <img alt= "alt" src="https://images.unsplash.com/photo-1610151642964-cafd5a955564?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"/>
          </div>
          <div>
            <img alt= "alt" src="https://images.unsplash.com/photo-1610151642964-cafd5a955564?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"/>
          </div>
        </div>
      </Slider>
    </div> 
    );
  }
}

export default CustomSliderParent;
