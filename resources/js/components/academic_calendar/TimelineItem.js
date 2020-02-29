import React from 'react';
import { Element } from 'react-scroll'
import './style.css';

function TimelineItem ({data}) {
 var currentDate = Date.now();
 var period = data.date.split(' - ', 2)
 for (var i = 0; i < period.length; i++) {
  period[i] = (new Date(period[i].replace( /(\d{2}).(\d{2}).(\d{4})/, "$2/$1/$3")).getTime())
 }

 if (period[0] === period[1]) {
  if ((currentDate >= period[0]) && (currentDate <= period[1])){
   if (data.text === '') {
    return (
     <div>
  		<Element name="test" className="element">
      </Element>
			<div className="timeline-item">
				<div className="timeline-item-content">
					<time>{data.date.slice(0, 10)}</time>
					<p>Текущее событие</p>
					<span className="circle">
					</span>
				</div>
			</div>
     </div>
    );
   }
   else {
    return (
    	<div className="timeline-item">
    		<Element name="test" className="element">
    		</Element>
	      <div className="timeline-item-content">
		      <span className="tag" style={{ background: data.category.color }}>
		      {data.category.tag}
		      </span>
		      <time>{data.date.slice(0, 10)}</time>
		      <p>{data.text}</p>
		      <p>Текущее событие</p>
		      <span className="circle">
		      </span>
	      </div>
     	</div>
    );
   }
  } 
  else {
   if (data.text === '') {
    return (null) 
 	} 
	return (
	<div className="timeline-item">
		 <div className="timeline-item-content">
			 <span className="tag" style={{ background: data.category.color }}>
			 {data.category.tag}
			 </span>
			 <time>{data.date.slice(0, 10)}</time>
			 <p>{data.text}</p>
			 <span className="circle">
			 </span>
		 </div>
	</div>
);
  }
 } 
 else {
  if ((currentDate >= period[0]) && (currentDate <= period[1])){
   if (data.text === '') {
    return (
    	<div className="timeline-item">
      	<Element name="test" className="element">
      	</Element>
	      <div className="timeline-item-content">
	       <time>{data.date}</time>
	       <p>Текущее событие</p>
	       <span className="circle">
	       </span>
	      </div>
     </div>
    );
   }
   else {
    return (
      	<div className="timeline-item">
	      	<Element name="test" className="element">
	      	</Element>
		      <div className="timeline-item-content">
			      <span className="tag" style={{ background: data.category.color }}>
			      {data.category.tag}
			      </span>
			      <time>{data.date}</time>
			      <p>{data.text}</p>
			      <p>Текущее событие</p>
			      <span className="circle">
			      </span>
		      </div>
	     	</div>
    );
   }
  } else {
   if (data.text === '') {
    return (null) 
   }
   return (
   <div className="timeline-item">
    <div className="timeline-item-content">
    <span className="tag" style={{ background: data.category.color }}>
    {data.category.tag}
    </span>
    <time>{data.date}</time>
    <p>{data.text}</p>
    <span className="circle">
    </span>
    </div>
   </div>
   );
  }
 }
}
// {data.link && (
//  <a href="{data.link.url}" target="_blank" rel="noopener noreferrer">
//   {data.link.text}
//  </a>
// )}

export default TimelineItem;