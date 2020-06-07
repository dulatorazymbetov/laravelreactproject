import React, { useState, useEffect } from "react";
import Box from '@material-ui/core/Box';
import Divider from '@material-ui/core/Divider';

function FormBuilderHeader(props){
	return (
		<Box my={1}>
			<Box
				fontSize={18}
				fontWeight={900}
				color="primary.main"
				mb={2}
			>
				{props.label}
			</Box>
			<Divider />
		</Box>
	);
}
export default FormBuilderHeader;